<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Traits\PogoServices;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    use PogoServices;

    public function index()
    {
        $userData = Auth::user();

        $bindings = [];

        $bindings['TopTitle'] = 'Staff dashboard';
        $bindings['PageTitle'] = 'Staff dashboard';

        $bindings['AuthUser'] = $userData;

        return view('staff.dashboard', $bindings);
    }
}
