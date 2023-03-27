<?php

namespace App\Http\Controllers;

use App\Models\ApiLog;
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

    public function compare(): View
    {
        $data = $this->getAllCountries();

        return view('compare', compact('data'));
    }

    public function compareCountries(Request $request): array
    {
        $data[] = $this->getDataByCountry($request->country1);
        $data[] = $this->getDataByCountry($request->country2);

        return $data;
    }

    public function getAllCountries(): array
    {
        return Http::get('https://dev.kidopilabs.com.br/exercicio/covid.php?listar_paises=1')->json();
    }

    public function getDataByCountry(string $country): array
    {
        return Http::get('https://dev.kidopilabs.com.br/exercicio/covid.php?pais=' . $country)->json();
    }

    public function dashboard(string $country): View
    {
        $states = $this->getDataByCountry($country);

        if (count($states) > 0) {
            $lastLog = ApiLog::create(['country' => $country, 'last_access' => now()]);
        }

        $data = ['color' => self::countryColors[$country], 'states' => $states, 'lastLog' => $lastLog];

        return view('dashboard', compact('data'));
    }
}