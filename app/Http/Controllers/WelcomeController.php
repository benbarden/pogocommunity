<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function show()
    {
        $bindings = [];

        $bindings['TopTitle'] = 'Coming soon';
        $bindings['PageTitle'] = 'Coming soon';

        return view('welcome', $bindings);
    }
}
