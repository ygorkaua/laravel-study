<?php

namespace App\Http\Controllers;

class SeriesController extends Controller
{
    /**
     * Return the series names.
     *
     * @return array
     */
    public function index()
    {
        $seriesWatching = [
            'Elite',
            'Outer Banks',
            'Round 6',
            'Brooklyn Nine-Nine',
            'Como Vender Drogas Online (Rápido)'
        ];
        $seriesToWatch = [
            'Black Mirror',
            'Peaky Blinders'
        ];

        return view('series.index', compact(['seriesWatching', 'seriesToWatch']));
    }
}
