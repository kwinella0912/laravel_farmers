<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function register(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8'
        ]);

        $user = User::create([
            'name' => $validator['name'],
            'email' => $validator['email'],
            'password' => bcrypt($validator['password']),
        ]);

        return response()->json(["response" => "Record saved"], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function login(Request $request)
    {

        $user = User::where('email', $request->email) ->first();
        if($user && Hash::check($request -> password, $user->password)) {

             $token = $user->createToken('authToken')->plainTextToken;

            return response()->json (['message' => 'login successfull' , 'user' => $user, 'token' => $token], 200);
        } else {
                 return response() -> json (['error' => 'Invalid Credentials'], 401);
        }

        // $validatedData = $request->validate([
        //     "email" => "reqiured|email",
        //     "password" => "required|min:8"
        // ]);

        // $credentials = [
        //     "email" => $validatedData["email"], 
        //     "password" => $validatedData["password"]
        // ];

        // if (Auth::attempt($credentials)) {
        //     $user = Auth::user();
        //     $token = $user->createToken('authToken')->plainTextToken;

        //     return response() -> json (["user" => $user, 'token' => $token], 200);

        // } else {
        //     return response() -> json (['error' => 'Invalid Credentials'], 401);

        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function index(string $id){
        $users = User::find($id);
        //$users = User::where('id', $id)->first();
        //more versatile method
        return Response(["user" => $users]);
    }
}
