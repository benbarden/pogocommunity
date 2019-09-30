<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Traits\PogoServices;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    use PogoServices;

    public function showList()
    {
        $userList = $this->getServiceUser()->getAll();

        $bindings = [];

        $bindings['TopTitle'] = 'User list';
        $bindings['PageTitle'] = 'User list';

        $bindings['UserList'] = $userList;

        return view('staff.user.list', $bindings);
    }
}
