<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function currency()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.currency.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
