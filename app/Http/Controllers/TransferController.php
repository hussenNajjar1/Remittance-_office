<?php

namespace App\Http\Controllers;
use App\Models\Office;
use App\Models\Transfer;
use Illuminate\Http\Request;


class TransferController extends Controller
{

    public function createTransferForm()
    {
        $offices = Office::all();
        return view('transfers.create', compact('offices'));
    }

    public function createTransfer(Request $request)
    {
        // تحقق من وجود رصيد كاف في المكتب المرسل
        $senderOffice = Office::find($request->input('sender_office'));
        $amount = $request->input('amount');

        if ($senderOffice->current_balance < $amount) {
            return redirect('/transfers/create')->with('error', 'Insufficient balance in the sender office.');
        }

        // إنشاء تحويل
        $transfer = new Transfer();
        $transfer->sender_office_id = $request->input('sender_office');
        $transfer->receiver_office_id = $request->input('receiver_office');
        $transfer->amount = $amount;
        $transfer->transfer_date = now();
        $transfer->save();

        // تحديث رصيد المكاتب
        $senderOffice->decrement('current_balance', $amount);
        $receiverOffice = Office::find($request->input('receiver_office'));
        $receiverOffice->increment('current_balance', $amount);

        return redirect('/transfers/history')->with('success', 'Transfer successful.');
    }

    public function viewTransfers()
    {
        $transfers = Transfer::all();
        return view('transfers.history', compact('transfers'));
    }

    // جديد
    public function viewOfficeTransfers($officeId)
    {
        // جلب التحويلات التي تمت إلى أو من المكتب الحالي
        $officeTransfers = Transfer::where('sender_office_id', $officeId)
            ->orWhere('receiver_office_id', $officeId)
            ->get();

        return view('transfers.office_transfers', compact('officeTransfers'));
    }
    public function showMoneyOrderInformation(Request $request){

        $id=$request->id;
        $transfer = Transfer::find($id);
        if(isset($transfer)){
            return  view('Moneyorderinformation.Moneyorderinformation',compact('transfer'));
        }
        return  view('Moneyorderinformation.Moneyorderinformation');

    }
    public function indexMoneyOrderInformation(){
        return  view('Moneyorderinformation.Moneyorderinformation');
    }

}
