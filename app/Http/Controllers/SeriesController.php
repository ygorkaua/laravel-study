<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SeriesController extends Controller
{
    /**
     * @var string
     */
    private $responseImageLink = '';

    /**
     * @var string
     */
    private $responseRating = '';

    /**
     * @var array
     */
    private $variablesArray;

    /**
     * Return the series names.
     *
     * @return array
     */
    public function index(Request $request)
    {
        $seriesWatching = [
            'Elite' => 'https://www.netflix.com/title/80200942',
            'Outer Banks' => 'https://www.netflix.com/title/80236318',
            'Round 6' => 'https://www.netflix.com/title/81040344',
            'Brooklyn Nine-Nine' => 'https://www.netflix.com/title/70281562',
            'Como Vender Drogas Online (Rápido)' => 'https://www.netflix.com/title/80218448'
        ];
        $seriesToWatch = Serie::query()
            ->orderBy('name')
            ->get();
        $message = $request->session()->get('message');

        return view('series.index', compact(['seriesWatching', 'seriesToWatch', 'message']));
    }

    /**
     * Controler to add a new serie to list
     */
    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $serie = Serie::create($request->all());
        $request->session()
            ->flash('message', "A série {$serie->name} foi adicionada com sucesso!");

        return redirect('/series');
    }

    public function item(Request $request)
    {
        $seriesToWatch = Serie::query()
            ->orderBy('name')
            ->get();

        $serieName = Serie::where('id', substr(url()->current(), 29))->first()->name;

        $response = Http::get('https://api.tvmaze.com/singlesearch/shows?q=' . $serieName);

        if (isset($response['id'])) {
            $this->responseImageLink = $response['image']['original'];
            $this->responseRating = $response['rating']['average'];
        }

        $this->variablesArray = [
            'seriesToWatch' => $seriesToWatch,
            'serieName' => $serieName,
            'response' => $response,
            'responseImageLink' => $this->responseImageLink,
            'responseRating' => $this->responseRating,
        ];

        return view('series.item', $this->variablesArray);
    }

    public function destroy(Request $request)
    {
    }
}
