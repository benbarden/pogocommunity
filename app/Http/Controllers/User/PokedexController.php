<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Traits\PogoServices;

class PokedexController extends Controller
{
    use PogoServices;

    private $allowedGens = [1, 2, 3, 4, 5];

    public function showGenLanding($genId)
    {
        if (!in_array($genId, $this->allowedGens)) abort(404);

        $bindings = [];

        $bindings['TopTitle'] = 'Pokedex: Gen '.$genId;
        $bindings['PageTitle'] = 'Pokedex: Gen '.$genId;
        $bindings['GenId'] = $genId;

        $bindings['PokemonList'] = $this->getServicePokemon()->getByGeneration($genId);

        $bindings['ShinyList'] = $this->getServicePokemon()->getShinies($genId);
        $bindings['RegionalList'] = $this->getServicePokemon()->getRegionals($genId);

        $legendaryList = $this->getServicePokemon()->getLegendaries($genId);
        $mythicalList = $this->getServicePokemon()->getMythicals($genId);
        $mergedList = $legendaryList->merge($mythicalList);
        $bindings['LegendaryMythicalList'] = $mergedList;

        return view('user.pokedex.page-gen', $bindings);
    }

    public function showGenList($genId)
    {
        if (!in_array($genId, $this->allowedGens)) abort(404);

        $bindings = [];

        $bindings['TopTitle'] = 'Gen '.$genId.' - Full list';
        $bindings['PageTitle'] = 'Gen '.$genId.' - Full list';
        $bindings['GenId'] = $genId;

        $bindings['PokemonList'] = $this->getServicePokemon()->getByGeneration($genId);

        return view('user.pokedex.page-list', $bindings);
    }

    public function showShinies()
    {
        $bindings = [];

        $bindings['TopTitle'] = 'Pokedex: Shinies';
        $bindings['PageTitle'] = 'Pokedex: Shinies';

        $bindings['PokemonList'] = $this->getServicePokemon()->getShinies();

        return view('user.pokedex.page-list', $bindings);
    }

    public function showRegionals()
    {
        $bindings = [];

        $bindings['TopTitle'] = 'Pokedex: Regionals';
        $bindings['PageTitle'] = 'Pokedex: Regionals';

        $bindings['PokemonList'] = $this->getServicePokemon()->getRegionals();

        return view('user.pokedex.page-list', $bindings);
    }

    public function showLegendariesMythicals()
    {
        $bindings = [];

        $bindings['TopTitle'] = 'Pokedex: Legendaries and Mythicals';
        $bindings['PageTitle'] = 'Pokedex: Legendaries and Mythicals';

        $legendaryList = $this->getServicePokemon()->getLegendaries();
        $mythicalList = $this->getServicePokemon()->getMythicals();

        $mergedList = $legendaryList->merge($mythicalList);

        $bindings['PokemonList'] = $mergedList;

        return view('user.pokedex.page-list', $bindings);
    }
}
