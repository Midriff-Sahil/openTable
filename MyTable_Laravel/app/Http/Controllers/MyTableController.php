<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Validator};

class MyTableController extends Controller
{
    public function signUp(Request $request)
    {
    }

    public function signIn(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validate->fails()) {
            return response()->json([
                'errors' => $validate->errors(),
            ], 422);
        }
        $loginData = array(
            'email' => $request->email,
            'password' => $request->password
        );
        if (Auth::attempt($loginData)) {
            return response()->json($loginData);
        } else {
            return response()->json('Invalid Credentials. Please try again');
        }
    }

    public function signOut(Request $request)
    {
    }
}
