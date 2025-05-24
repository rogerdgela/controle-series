<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Series::all();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('series.index')->with('series', $series)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        $serie = Series::create($request->only(['name']));

        for ($i = 1; $i <= $request->seasonsQtd; $i++) {
            $season = $serie->seasons()->create([
                'number' => $i,
            ]);

            for ($j = 1; $j <= $request->episodesPerSeason; $j++) {
                $season->episodes()->create([
                    'number' => $j,
                ]);
            }
        }

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série \"{$serie->name}\" adicionada com sucesso!");
    }

    public function destroy(Series $series)
    {
        $series->delete();

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série \"{$series->name}\" removida com sucesso!");
    }

    public function edit(Series $series)
    {
        return view('series.edit')->with('serie', $series);
    }

    public function update(Series $series, SeriesFormRequest $request)
    {
        $series->fill($request->all());
        $series->save();

        return to_route('series.index')->with('mensagem.sucesso', "Série \"{$series->name}\" atualizada com sucesso!");
    }
}
