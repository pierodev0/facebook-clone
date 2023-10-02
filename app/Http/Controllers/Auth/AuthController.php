<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{

    public function index()
    {
        return view('welcome');
    }


    public function register(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8'
        ]);

        $errors = [];
        if ($validator->fails()) {
            $errors = $validator->errors();
        } else {
            User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
        }

        return response()->json([
            'data' => $request->all(),
            'errors' => $errors
        ]);
    }


    public function login(Request $request)
    {

        $request->validate([
            'login_email' => 'required|email',
            'login_password' => 'required|min:8'
        ]);

        if (Auth::attempt([
            'email' => $request->login_email,
            'password' => $request->login_password,
        ])) {
            return view('dashboard.index');
        } else {
            return back()->withErrors(['invalid_credentials' => 'Usuario o contraseñas invalidas'])->withInput();
        }
    }
}
