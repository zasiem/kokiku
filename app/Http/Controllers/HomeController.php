<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $recipes;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->recipes = new RecipesController();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        return $this->recipes->welcome();
    }

    public function recipes()
    {
        return $this->recipes->index();
    }

    public function detail_recipe($id)
    {
      return $this->recipes->show($id);
    }

    public function search(Request $request)
    {
      return $this->recipes->search($request->search);
    }
}
