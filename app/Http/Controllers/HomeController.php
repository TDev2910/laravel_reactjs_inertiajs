<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia; // Import Inertia

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'title' => 'Welcome to Our Application',
        ]);
    }
}
