<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function roles()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.roles.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
