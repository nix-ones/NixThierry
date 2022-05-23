<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function list(){
       $users = User::all();
       return view('Admin.listUser',compact('users'));
    }

}
