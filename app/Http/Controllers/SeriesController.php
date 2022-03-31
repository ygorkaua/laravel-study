<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SeriesController extends Controller
{
    /**
     * @var string
     */
    private string $responseImageLink = '';

    /**
     * @var string
     */
    private string $responseRating = '';

    /**
     * Return the series names.
     *
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        $seriesWatching = Serie::query()
            ->orderBy('id')
            ->get();

        $message = $request->session()->get('message');

        return view('series.index', compact(['seriesWatching', 'message']));
    }

    /**
     * Controller to add a new tv show to list
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

        $variablesArray = [
            'seriesToWatch' => $seriesToWatch,
            'serieName' => $serieName,
            'response' => $response,
            'responseImageLink' => $this->responseImageLink,
            'responseRating' => $this->responseRating,
        ];

        return view('series.item', $variablesArray);
    }

    public function destroy(Request $request)
    {
    }
}
