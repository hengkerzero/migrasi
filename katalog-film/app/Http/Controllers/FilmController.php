<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
    return view('films', [
        'filmTersedia' => true,
        'filmList' => [
            'Laskar Pelangi',
            '5 centimeter',
            'Avanger',
        ],
    ]);
    }
}
