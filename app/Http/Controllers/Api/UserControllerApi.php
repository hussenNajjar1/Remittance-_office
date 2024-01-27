<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserControllerApi extends Controller
{
    public function index()
    {
        if(Auth::user()->role == 1){
            $users = User::orderBy('id', 'desc')->get();
            return response()->json(['users' => $users]);
        }
        return response()->json(['message' => 'Unauthorized.'], 401);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Implement the logic to store a new user via API
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Implement the logic to retrieve a specific user via API
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Implement the logic to update a specific user via API
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(['message' => 'User deleted successfully.']);
    }
}