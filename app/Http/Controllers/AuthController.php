<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use PDO;

class AuthController extends Controller
{
    public function saveUser(Request $request)
    {
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;
        $password_confirmation = $request->password_confirmation;
        if ($password != $password_confirmation) {
            echo '<script> alert("Passwords do not match"); </script>';
            return view('registration');
        } else {
            $data = [
                'username' => $username,
                'password' => Hash::make($password),
                'email' => $email,
                'role' => 'Patient'
            ];
            $user = User::firstOrCreate(['email' => $email], $data);
            if ($user) {
                echo '<script> alert("User successfully registered !"); </script>';
                return view('login');
            } else {
                echo '<script> alert("Registration failed !"); </script>';
            }
        }
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $user = User::where('email', $credentials['email'])->first();
        if ($user && Hash::check($credentials['password'], $user->password)) {
            Session::put('user', $user);
            echo '<script> alert("Successful login !"); </script>';
            return view('starter');
        } else {
            echo '<script> alert("Login failed !"); </script>';
            return view('login');
        }
    }
    public function logout(Request $request)
    {
    
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        echo '<script> alert("Successful logout !"); </script>';
        return view('login');
    }


    public function getRegistrationView()
    {
        return view('registration');
    }

    public function getLoginView()
    {
        return view('login');
    }
}
