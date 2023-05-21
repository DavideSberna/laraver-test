<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $allCategories = DB::table('categories')->get();
        $allPosts = DB::table('posts')->get();

        return view('index', [
            'categories' => $allCategories,
            'posts' => $allPosts
        ]);
    }
}
