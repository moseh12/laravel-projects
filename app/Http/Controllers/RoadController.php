<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoadController extends Controller
{
    public function road()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.road.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
