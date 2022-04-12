<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getCategories(){
        $categories = Category::all();
        $data = [];
        $data['categories'] = $categories;

        return view('category/allCategories', $data);
    }
}
