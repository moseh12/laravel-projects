<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatsController extends Controller
{
    public function index()
    {
        // Optionally, you can pass data to the view here.
        return view('admin.chats.index');  // Assuming your custom view is in resources/views/categories/index.blade.php
    }
}
