<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralSettingsController extends Controller
{
    public function general_settings()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.general_settings.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
