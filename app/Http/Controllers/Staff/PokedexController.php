<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;

use App\Pokemon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Traits\PogoServices;

class PokedexController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    use PogoServices;

    /**
     * @var array
     */
    private $validationRules = [
        'pokemon_no' => ['required', 'string', 'max:4', 'unique:pokemon,pokemon_no'],
        'pokemon_name' => ['required', 'string', 'max:50', 'unique:pokemon,pokemon_name'],
        'generation' => ['required', 'integer', 'max:8'],
        'buddy_distance' => ['integer', 'max:20', 'nullable'],
    ];

    public function showList()
    {
        $pokemonList = $this->getServicePokemon()->getAll();

        $bindings = [];

        $bindings['TopTitle'] = 'Pokemon list';
        $bindings['PageTitle'] = 'Pokemon list';

        $bindings['PokemonList'] = $pokemonList;

        return view('staff.pokedex.pokemon.list', $bindings);
    }

    public function addPokemon()
    {
        $request = request();

        $bindings = [];

        if ($request->isMethod('post')) {

            $this->validate($request, $this->validationRules);

            $pokemon = new Pokemon();
            $pokemon->pokemon_no = $request->pokemon_no;
            $pokemon->pokemon_name = $request->pokemon_name;
            $pokemon->generation = $request->generation;
            $pokemon->is_available = $request->is_available == 'on' ? 1 : 0;
            $pokemon->is_regional = $request->is_regional == 'on' ? 1 : 0;
            $pokemon->is_legendary = $request->is_legendary == 'on' ? 1 : 0;
            $pokemon->is_mythical = $request->is_mythical == 'on' ? 1 : 0;
            $pokemon->buddy_distance = $request->buddy_distance;
            $pokemon->has_shiny = $request->has_shiny == 'on' ? 1 : 0;
            $pokemon->save();

            return redirect(route('staff.pokedex.pokemon.list'));

        }

        $bindings['FormMode'] = 'add';

        $bindings['TopTitle'] = 'Staff - Add Pokemon';
        $bindings['PageTitle'] = 'Add Pokemon';

        return view('staff.pokedex.pokemon.add', $bindings);
    }

    public function editPokemon($pokemonNo)
    {
        $pokemon = $this->getServicePokemon()->getByNo($pokemonNo);
        if (!$pokemon) abort(404);

        $this->validationRules['pokemon_no'] = ['required', 'string', 'max:4', 'unique:pokemon,pokemon_no,'.$pokemonNo.','.$pokemon->getKeyName()];
        $this->validationRules['pokemon_name'] = ['required', 'string', 'max:50', 'unique:pokemon,pokemon_name,'.$pokemon->pokemon_name.',pokemon_name'];

        $request = request();

        $bindings = [];

        if ($request->isMethod('post')) {

            $bindings['FormMode'] = 'edit-post';

            $this->validate($request, $this->validationRules);

            $pokemon->pokemon_no = $request->pokemon_no;
            $pokemon->pokemon_name = $request->pokemon_name;
            $pokemon->generation = $request->generation;
            $pokemon->is_available = $request->is_available == 'on' ? 1 : 0;
            $pokemon->is_regional = $request->is_regional == 'on' ? 1 : 0;
            $pokemon->is_legendary = $request->is_legendary == 'on' ? 1 : 0;
            $pokemon->is_mythical = $request->is_mythical == 'on' ? 1 : 0;
            $pokemon->buddy_distance = $request->buddy_distance;
            $pokemon->has_shiny = $request->has_shiny == 'on' ? 1 : 0;
            $pokemon->save();

            return redirect(route('staff.pokedex.pokemon.list'));

        } else {

            $bindings['FormMode'] = 'edit';

        }

        $bindings['TopTitle'] = 'Staff - Edit Pokemon';
        $bindings['PageTitle'] = 'Edit Pokemon';
        $bindings['PokemonData'] = $pokemon;
        $bindings['PokemonNo'] = $pokemonNo;

        return view('staff.pokedex.pokemon.edit', $bindings);
    }

}
