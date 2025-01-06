<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function notifications()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.notifications.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
