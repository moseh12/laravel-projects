<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.report.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
