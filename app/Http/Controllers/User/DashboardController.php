<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function show()
    {
        $bindings = [];

        $bindings['TopTitle'] = 'User dashboard';
        $bindings['PageTitle'] = 'User dashboard';

        return view('user.dashboard', $bindings);
    }
}
