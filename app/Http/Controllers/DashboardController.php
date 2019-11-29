<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Recipes;

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

  public function upload_recipes(){
    return view('upload-recipes');
  }

  public function proses_upload_recipe(Request $request)
  {
    $path_video = null;
    $path_image = $request->file('image')->store('recipe_image', 'public');
    if ($request->video != null) {
      $path_video = $request->file('video')->store('recipe_video', 'public');
    }

    Recipes::insert([
      'name' => $request->name,
      'duration' => $request->duration,
      'description' => $request->description,
      'category' => $request->category,
      'image' => $path_image,
      'video' => $path_video,
    ]);

    return redirect('/');

  }

}
