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
}
