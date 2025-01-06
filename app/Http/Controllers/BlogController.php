<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.blog.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
