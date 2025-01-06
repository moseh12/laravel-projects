<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPackageController extends Controller
{
    public function user_package()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.user_package.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
