<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cd;

class StaticPageController extends Controller
{   
    // Home
    public function home() {  
        
        return view('home');
    }

    // Shop
    public function shop() {  
        
        $cds = Cd::all();
        
        return view('shop', compact('cds'));
    }

    // Contatti
    public function contatti() {  
        
        return view('contatti');
    }
}
