<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliceController extends Controller
{
    public function police()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.police.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
