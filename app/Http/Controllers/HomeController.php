<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        return view('welcome');
    }

    public function login(){
        return view('login');
    }

}
