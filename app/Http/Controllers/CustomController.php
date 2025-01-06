<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function custom_fields()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.custom_fields.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
