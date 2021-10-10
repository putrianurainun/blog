<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
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
        $role= Auth::user()->role;
        if($role=="Admin"){
            return redirect()->route('admin.index');
        }else if($role=="User"){
            return redirect()->route('user.index');
        }else{
            return redirect('home'); 
        }
    }    
}
