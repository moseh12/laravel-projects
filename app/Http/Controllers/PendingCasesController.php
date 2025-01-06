<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendingCasesController extends Controller
{
    public function pending_cases()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.pending_cases.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
