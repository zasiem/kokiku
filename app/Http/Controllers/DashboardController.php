<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{

  private $users;

  public function __construct()
  {
    $this->middleware('auth');
    $this->users = new UsersController();
  }

  public function index()
  {
    $role = Auth::user()->role;
    if ($role == 'user') {
      return redirect('/');
    }else{
      return view('dashboard');
    }
  }

  public function profile(){
    $data['user'] = $this->users->index();
    return view('profile', $data);
  }

}
