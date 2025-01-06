<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function countries()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.countries.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
