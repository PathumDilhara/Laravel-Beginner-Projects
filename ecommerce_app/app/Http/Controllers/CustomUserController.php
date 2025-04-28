<?php

namespace App\Http\Controllers;

use App\Models\CustomUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CustomUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = CustomUser::all();
        return response()->json($user);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $validatedData = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => "required|min:3"
        ]);

        // If validation fails, return a 422 response with errors
        if ($validatedData->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validatedData->errors()
            ], 422);
        }

        // Create the new user
        $customUser = new CustomUser();
        $customUser->name = $request->name;
        $customUser->email = $request->email;
        $customUser->password = Hash::make($request->getPassword());

        $customUser->save();

        // Return a success response with the newly created user
        return response()->json([
            'message'=> 'user created successfully',
            'user'=> $customUser,
        ], 200);

        // return redirect('/users')->with([
        //     'message'=> 'user created successfully',
        //     'user'=> $customUser,
        // ]);
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
}
