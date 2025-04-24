<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index() 
    {
        $series = [
            'The Witcher',
            'The Last of Us',
            'Lost',
            'Breaking Bad',
            'The Boys',
        ];

        $html = '<ul>';
        foreach ($series as $serie) {
            $html .= '<li>' . $serie . '</li>';
        }
        $html .= '</ul>';

        echo $html;
    }
}
