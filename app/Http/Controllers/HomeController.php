<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        
        if(Auth::id())
        {
            $userrole=Auth()->user()->role;

            if($userrole=='customer'){
                return view('dashboard');
            }
            else if($userrole=='admin'){
                return view('backend.main');
            }
            else{
                return redirect()->back();
            }
        }
    }
}
