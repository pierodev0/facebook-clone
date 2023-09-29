<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
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

        }

        return response()->json([
            'data' => $request->all(),
            'errors' => $errors
        ]);


    }


}
