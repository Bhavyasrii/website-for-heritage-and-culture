<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
public function index(){
    $userCount = User::all()->count();
    
    return view("pages.index",compact("userCount"));
}
}
