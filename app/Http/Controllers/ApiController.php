<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
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

    public function getDataByCountry(string $country): array
    {
        return Http::get('https://dev.kidopilabs.com.br/exercicio/covid.php?pais=' . $country)->json();
    }

    public function dashboard(string $country): View
    {

        $states = $this->getDataByCountry($country);

        $data = json_encode(['color' => self::countryColors[$country], 'states' => $states]);

        return view('dashboard', compact('data'));
    }


    public function stats(): View
    {
        return view('stats.brazil');
    }
}