<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalController extends Controller
{
    public function medical()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.medical.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
