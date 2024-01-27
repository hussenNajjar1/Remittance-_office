<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Office;
use App\Models\Transfer;

class TransferApiController extends Controller
{
    public function createTransfer(Request $request)
    {
        $senderOffice = Office::find($request->input('sender_office'));
        $amount = $request->input('amount');

        if ($senderOffice->current_balance < $amount) {
            return response()->json(['error' => 'Insufficient balance in the sender office.'], 400);
        }

        $transfer = new Transfer();
        $transfer->sender_office_id = $request->input('sender_office');
        $transfer->receiver_office_id = $request->input('receiver_office');
        $transfer->amount = $amount;
        $transfer->transfer_date = now();
        $transfer->save();

        $senderOffice->decrement('current_balance', $amount);
        $receiverOffice = Office::find($request->input('receiver_office'));
        $receiverOffice->increment('current_balance', $amount);

        return response()->json(['success' => 'Transfer successful.']);
    }

    public function viewTransfers()
    {
        $transfers = Transfer::all();
        return response()->json(['transfers' => $transfers]);
    }

    public function viewOfficeTransfers($officeId)
    {
        $officeTransfers = Transfer::where('sender_office_id', $officeId)
            ->orWhere('receiver_office_id', $officeId)
            ->get();

        return response()->json(['officeTransfers' => $officeTransfers]);
    }

    public function showMoneyOrderInformation(Request $request)
    {
        $id = $request->id;
        $transfer = Transfer::find($id);

        if (isset($transfer)) {
            return response()->json(['transfer' => $transfer]);
        }

        return response()->json(['message' => 'Transfer not found.'], 404);
    }

    public function indexMoneyOrderInformation()
    {
        return response()->json(['message' => 'Index not supported.'], 400);
    }
}