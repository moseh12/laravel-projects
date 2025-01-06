<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyUtilitiesController extends Controller
{
    public function buy_utilities()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.buy_utilities.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
