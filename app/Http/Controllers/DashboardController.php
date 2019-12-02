<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Recipes;
use App\Bahan;
use App\Tutorial;
use App\Alat;
use App\Comments;

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

    $recipes_id = Recipes::select('id')
    ->orderBy('id', 'DESC')
    ->first();

    //bahan
    for ($i=0; $i < count($request->bahan); $i++) {
      Bahan::insert([
        'recipes_id' => $recipes_id->id,
        'nama_bahan' => $request->bahan[$i],
      ]);
    }

    //alat
    for ($i=0; $i < count($request->alat); $i++) {
      Alat::insert([
        'recipes_id' => $recipes_id->id,
        'nama_alat' => $request->alat[$i],
      ]);
    }

    //tutorial
    for ($i=0; $i < count($request->tutorial); $i++) {
      Tutorial::insert([
        'recipes_id' => $recipes_id->id,
        'tutorial' => $request->tutorial[$i],
      ]);
    }

    return redirect('/');

  }

  public function proses_comment(Request $request){
    Comments::insert([
      'recipes_id' => $request->id,
      'users_id' => Auth::user()->id,
      'comment' => $request->comments,
    ]);

    return redirect()->back();
  }

  public function proses_like(Request $request){
    $likes = Recipes::find($request->id)->increment('likes');
    return redirect()->back();
  }

}
