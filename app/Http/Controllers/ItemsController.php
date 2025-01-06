<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function items()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.items.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}

