<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreasController extends Controller
{
    public function areas()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.areas.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
