<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function show()
    {
        $bindings = [];

        $bindings['TopTitle'] = 'Welcome';
        $bindings['PageTitle'] = 'Welcome';

        return view('welcome', $bindings);
    }
}
