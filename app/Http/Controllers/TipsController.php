<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipsController extends Controller
{
    public function index()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.tips.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
