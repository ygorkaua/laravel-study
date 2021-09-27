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
            'Elite' => 'https://www.netflix.com/title/80200942',
            'Outer Banks' => 'https://www.netflix.com/title/80236318',
            'Round 6' => 'https://www.netflix.com/title/81040344',
            'Brooklyn Nine-Nine' => 'https://www.netflix.com/title/70281562',
            'Como Vender Drogas Online (Rápido)' => 'https://www.netflix.com/title/80218448'
        ];
        $seriesToWatch = [
            'Black Mirror' => 'https://www.netflix.com/title/70264888',
            'Peaky Blinders' => 'https://www.netflix.com/title/80002479'
        ];

        return view('series.index', compact(['seriesWatching', 'seriesToWatch']));
    }
}
