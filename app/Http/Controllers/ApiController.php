<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\View\View;

class ApiController extends Controller
{
    const countryColors = [
        'australia' => 'bg-primary',
        'brazil' => 'bg-success',
        'canada' => 'bg-danger',
    ];

    public function home(): View
    {
        return view('home');
    }

    public function dashboard(string $country): View
    {
        $states = [
            [
                'name' => "teste",
                'number' => 123,
            ],
            [
                'name' => "teste222",
                'number' => 123,
            ],
            [
                'name' => "teste33",
                'number' => 123,
            ],
        ];

        $data = json_encode(['country' => $country, 'color' => self::countryColors[$country], 'states' => $states]);

        return view('dashboard', compact('data'));
    }

    public function stats(): View
    {
        return view('stats.brazil');
    }
}