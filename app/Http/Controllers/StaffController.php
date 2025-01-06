<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.staff.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
