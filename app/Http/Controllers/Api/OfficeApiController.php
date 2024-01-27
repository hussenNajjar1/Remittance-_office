<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Office;
use App\Models\Transfer;
use App\Models\User;

class OfficeApiController extends Controller
{
    public function index()
    {
       
        $offices = Office::with('user')->get();
        return response()->json(['offices' => $offices]);
    }

    public function individualofficeShow(string $idUser)
    {
        $office = Office::with('user')->where('id_user', $idUser)->first();

        if ($office) {
            $officesBalance = $office->current_balance;
            $officeId = $office->id;
            $countTransfersSender = Transfer::where('sender_office_id', $officeId)->count();
            $countTransfersReceiver = Transfer::where('receiver_office_id', $officeId)->count();

            return response()->json([
                'officesBalance' => $officesBalance,
                'countTransfersSender' => $countTransfersSender,
                'countTransfersReceiver' => $countTransfersReceiver,
            ]);
        } else {
            return response()->json(['error' => 'Office not found.'], 404);
        }
    }

    public function individualTransfersSender(string $idUser)
    {
        $office = Office::with('user')->where('id_user', $idUser)->first();

        if ($office) {
            $officeId = $office->id;
            $transfersSender = Transfer::where('sender_office_id', $officeId)->get();

            return response()->json(['transfersSender' => $transfersSender]);
        } else {
            return response()->json(['error' => 'Office not found.'], 404);
        }
    }

    public function individualTransfersReceiver(string $idUser)
    {
        $office = Office::with('user')->where('id_user', $idUser)->first();

        if ($office) {
            $officeId = $office->id;
            $transfersReceiver = Transfer::where('receiver_office_id', $officeId)->get();

            return response()->json(['transfersReceiver' => $transfersReceiver]);
        } else {
            return response()->json(['error' => 'Office not found.'], 404);
        }
    }

    public function create()
    {
        $usersWithoutOffice = User::whereNotIn('id', function ($query) {
            $query->select('id_user')->from('offices');
        })->where('role', '!=', 1)->get();

        return response()->json(['usersWithoutOffice' => $usersWithoutOffice]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'country' => 'required',
            'id_user' => 'required',
        ]);

        $office = Office::create($validatedData);

        return response()->json(['office' => $office, 'message' => 'Office added successfully.']);
    }

    public function edit(Office $office)
    {
        return response()->json(['office' => $office]);
    }

    public function update(Request $request, Office $office)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'country' => 'required',
        ]);

        $office->update($validatedData);

        return response()->json(['office' => $office, 'message' => 'Office updated successfully.']);
    }

    public function show(Office $office)
    {
        return response()->json(['office' => $office]);
    }

    public function destroy(Office $office)
    {
        $office->delete();

        return response()->json(['message' => 'Office deleted successfully.']);
    }
}