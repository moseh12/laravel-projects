<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqsController extends Controller
{
    public function faqs()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.faqs.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
