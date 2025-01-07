<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FireController extends Controller
{
    public function fire()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.fire.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
