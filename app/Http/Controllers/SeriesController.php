<?php

namespace App\Http\Controllers;

class SeriesController
{
    public function listarSeries()
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
