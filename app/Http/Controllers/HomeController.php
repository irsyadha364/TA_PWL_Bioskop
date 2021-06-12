<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $search = request()->query('search');        
        if($search) {
            $film = DB::table('movies')
                    ->where('nama_film', "like", "%{$search}%")
                    ->paginate(6);            
        } else {
            $movies = DB::table('movies')
                    ->paginate(6);
        }


        if (Auth::user()->role == "Admin") {            
            return view('homeAdmin', ['products' => $products]);
        } else {            
            return view('homeUser', ['products' => $products]);
        }
    }
}
