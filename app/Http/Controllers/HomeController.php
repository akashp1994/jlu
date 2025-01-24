<?php

namespace App\Http\Controllers;

use App\Models\JluUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    public function index(){
        return view('welcome');
    }

    public function login(){
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:jlu_users,email',
            'enroll_no' => 'required|string|unique:jlu_users,enorll_no',
            'password' => 'required|min:8|confirmed',
        ]);

        JluUser::create([
            'name' => $request->name,
            'email' => $request->email,
            'enorll_no' => $request->enroll_no,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email_or_enroll_no' => 'required',
            'password' => 'required',
        ]);

        $user = JluUser::where('email', $request->email_or_enroll_no)
            ->orWhere('enorll_no', $request->email_or_enroll_no)
            ->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Session::put('user', $user);

            return redirect()->route('home')->with('success', 'Login successful!');
        }

        return back()->withErrors(['error' => 'Invalid credentials'])->withInput();
    }

    public function logout()
    {
        Session::forget('user');
        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }

}
