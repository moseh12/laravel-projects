<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    public function advertisement()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.advertisement.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
