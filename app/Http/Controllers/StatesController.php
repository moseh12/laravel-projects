<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatesController extends Controller
{
    public function states()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.states.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
