<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\View\View;

class ApiController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    public function dashboard(string $country): View
    {
        return view('dashboard', compact('country'));
    }

    public function stats(): View
    {
        return view('stats.brazil');
    }
}