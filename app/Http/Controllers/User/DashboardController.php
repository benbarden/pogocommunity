<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Traits\PogoServices;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    use PogoServices;

    public function show()
    {
        $userData = Auth::user();

        $bindings = [];

        $bindings['TopTitle'] = 'User dashboard';
        $bindings['PageTitle'] = 'User dashboard';

        $bindings['AuthUser'] = $userData;

        return view('user.dashboard', $bindings);
    }
}
