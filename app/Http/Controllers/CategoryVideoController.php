<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryVideoController extends Controller
{
    public function index(Category $category)
    {
        $videos = $category->videos()->paginate(9);
        $title = $category->name;
        return view('videos.index', compact('videos', 'title'));
    }
}
