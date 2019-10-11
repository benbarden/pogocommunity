<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Traits\PogoServices;

class MapsController extends Controller
{
    use PogoServices;

    public function showPokestops()
    {
        $bindings = [];

        $bindings['TopTitle'] = 'Maps: Pokestops';
        $bindings['PageTitle'] = 'Maps: Pokestops';

        return view('user.maps.pokestops', $bindings);
    }
}
