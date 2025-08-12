<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class PageController extends Controller
{
    public function index(){
        // return redirect('/home');
        return view('home');
    }
}
