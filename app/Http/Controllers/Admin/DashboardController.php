<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $activeCategories = [];
        $activePost = [];
        $inActiveCategories = [];
        $inActivePost = [];
        return view('admin.dashboard', compact('activeCategories', 'activePost', 'inActiveCategories', 'inActivePost'));
    }
}
