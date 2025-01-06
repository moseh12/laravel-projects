<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FutureSectionController extends Controller
{
    public function future_section()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.future_section.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
