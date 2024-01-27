<?php

namespace App\Http\Controllers;
use App\Models\Office;
use App\Models\Transfer;
use App\Models\User;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
      public function index()
    {

        $offices = Office::with('user')->get();
        return view('offices.index', compact('offices'));
    }
    public function individualofficeShow(string $idUser)
    {

        $office = Office::with('user')->where('id_user', $idUser)->first();
        if ($office) {
            $officesBalance = $office->current_balance;
            $officeId=$office->id;
            $countTransfersSender = Transfer::where('sender_office_id', $officeId)->count();
            $countTransfersReceiver = Transfer::where('receiver_office_id', $officeId)->count();

            return view('layouts.individualofficeShow', compact('officesBalance','countTransfersSender'
                ,'countTransfersReceiver'));
        }
        else{
            return redirect()->back();
        }

    }
    public function individualTransfersSender(string $idUser)
    {

        $office = Office::with('user')->where('id_user', $idUser)->first();
        if ($office) {
            $officeId = $office->id;
            $TransfersSender = Transfer::where('sender_office_id', $officeId)->get();


            return view('layouts.individualTransfersSenderShow', compact('TransfersSender'));
        }
        else{
            return redirect()->back();
        }
        }
    public function individualTransfersReceiver(string $idUser)
    {

        $office = Office::with('user')->where('id_user', $idUser)->first();
        if ($office) {
            $officeId = $office->id;
            $TransfersReceiver = Transfer::where('receiver_office_id', $officeId)->get();


            return view('layouts.individualTransfersReceiverShow', compact('TransfersReceiver'));

        }
        else{
            return redirect()->back();
        }
    }
    public function create()
    {
        $usersWithoutOffice = User::whereNotIn('id', function ($query) {
            $query->select('id_user')->from('offices');
        })->where('role', '!=', 1)->get();



        return view('offices.form',compact('usersWithoutOffice'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'country' => 'required',
            'current_balance' => 'required',
            'id_user'=>'required'
        ]);

        Office::create($validatedData);

        return redirect('/offices')->with('success', 'Office added successfully.');
    }

    public function edit(Office $office)
    {
        return view('offices.form', compact('office'));
    }

    public function update(Request $request, Office $office)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'country' => 'required',
            'current_balance' => 'required',
        ]);

        $office->update($validatedData);

        return redirect('/offices')->with('success', 'Office updated successfully.');
    }

    public function show(Office $office)
    {
        return view('offices.show', compact('office'));
    }

    public function destroy(Office $office)
    {
        $office->delete();

        return redirect('/offices')->with('success', 'Office deleted successfully.');
    }
}