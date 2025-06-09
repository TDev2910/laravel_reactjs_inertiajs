<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia; 

class PageController extends Controller
{
    public function about()
    {
        return Inertia::render('About');
    }

    public function contact()
    {
        return Inertia::render('Contact');
    }
}
