<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function category(){
        return view('admin.category');
    }
    public function auth(){
        return view('admin.auth.auth');
    }
}
