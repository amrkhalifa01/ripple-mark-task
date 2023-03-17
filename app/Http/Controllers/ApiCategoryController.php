<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class ApiCategoryController extends Controller
{
    public function getCategories()
    {
        $categories = Category::select()->get();
        return CategoryResource::collection($categories);
    }
}
