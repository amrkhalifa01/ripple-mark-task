<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function get_all_categories()
    {
        $categories = DB::table('categories')->select()->where("parent_id", "=", null)->get();
        return view("categories", compact("categories"));
    }
}
