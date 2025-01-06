<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function site()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.site.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
