<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function slider()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.slider.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
