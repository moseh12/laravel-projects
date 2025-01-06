<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserReportController extends Controller
{
    public function user_report()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.user_report.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
