<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    //
    public function index()
    {
if (Auth::id()) {
  $usrType=Auth()->user()->usertype;
  if ($usrType=="user") {
    return view('dashboard');
    # code...
  }
  elseif ($usrType=="Admin"){
    return view('admin.layouts.admin');
  }
  else
  {
    return redirect()->back();
  }
}
    }
}
