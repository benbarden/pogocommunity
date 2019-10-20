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

    public function getQuickStats()
    {
        return DB::select("
            select generation, 
                count(*) as sum_total, 
                sum(is_available) as sum_available, 
                sum(is_regional) as sum_regional, 
                sum(is_legendary) as sum_legendary, 
                sum(is_mythical) as sum_mythical, 
                sum(has_shiny) as sum_shiny
                from pokemon group by generation
        ");
    }
}
