<?php

namespace App\Http\Controllers;

class StaticContentController extends Controller
{
    public function privacy()
    {
        $bindings = [];

        $bindings['TopTitle'] = 'Privacy';
        $bindings['PageTitle'] = 'Privacy';

        return view('static-content.privacy', $bindings);
    }

    public function about()
    {
        $bindings = [];

        $bindings['TopTitle'] = 'About';
        $bindings['PageTitle'] = 'About';

        return view('static-content.about', $bindings);
    }
}
