<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class testCtrl extends Controller
{
    public function index()
    {
        return Inertia::render('Test');
    }
}
