<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'The Witcher',
            'The Last of Us',
            'Lost',
            'Breaking Bad',
            'The Boys',
        ];

        return view('listar-series', compact('series'));
    }
}
