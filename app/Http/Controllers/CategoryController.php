<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(Request $request){
        $response = Category::create([
            'category' => $request->category,
            'description' => $request->description,
        ]);

        if($response->successfull()){
            return redirect()->back()->with(['success'=>'category created successfully']);
        }
    }
}
