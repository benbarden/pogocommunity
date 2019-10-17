<?php


namespace App\Services;

use App\Pokemon;

use Illuminate\Support\Facades\DB;


class PokemonService
{
    /**
     * @param $pokemonNo
     * @return Pokemon
     */
    public function getByNo($pokemonNo)
    {
        return Pokemon::where('pokemon_no', $pokemonNo)->first();
    }

    public function getAll()
    {
        return Pokemon::orderBy('pokemon_no', 'desc')->get();
    }

    public function getCount()
    {
        return Pokemon::orderBy('pokemon_no', 'desc')->count();
    }
}
