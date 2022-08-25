<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use App\Category;

public function index(Category $category)
{
    return view('categories.index')->with(['posts' => $category->getByCategory()]);
}

}
