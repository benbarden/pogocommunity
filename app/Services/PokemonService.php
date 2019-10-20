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

    public function getQuickStats($generation = null)
    {
        if ($generation) {

            return DB::select("
                select generation, 
                    count(*) as sum_total, 
                    sum(is_available) as sum_available, 
                    sum(is_regional) as sum_regional, 
                    sum(is_legendary) as sum_legendary, 
                    sum(is_mythical) as sum_mythical, 
                    sum(has_shiny) as sum_shiny
                    from pokemon where generation = ? group by generation
            ", [$generation]);

        } else {

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

    public function getByGeneration($generation)
    {
        return Pokemon::where('generation', $generation)->orderBy('pokemon_no', 'asc')->get();
    }

    public function getShinies($generation = null)
    {
        if ($generation) {
            return Pokemon::where('generation', $generation)->where('has_shiny', 1)->orderBy('pokemon_no', 'asc')->get();
        } else {
            return Pokemon::where('has_shiny', 1)->orderBy('pokemon_no', 'asc')->get();
        }
    }

    public function getRegionals($generation = null)
    {
        if ($generation) {
            return Pokemon::where('generation', $generation)->where('is_regional', 1)->orderBy('pokemon_no', 'asc')->get();
        } else {
            return Pokemon::where('is_regional', 1)->orderBy('pokemon_no', 'asc')->get();
        }
    }

    public function getLegendaries($generation = null)
    {
        if ($generation) {
            return Pokemon::where('generation', $generation)->where('is_legendary', 1)->orderBy('pokemon_no', 'asc')->get();
        } else {
            return Pokemon::where('is_legendary', 1)->orderBy('pokemon_no', 'asc')->get();
        }
    }

    public function getMythicals($generation = null)
    {
        if ($generation) {
            return Pokemon::where('generation', $generation)->where('is_mythical', 1)->orderBy('pokemon_no', 'asc')->get();
        } else {
            return Pokemon::where('is_mythical', 1)->orderBy('pokemon_no', 'asc')->get();
        }
    }
}
