<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class MemberListController extends Controller
{
    public function show()
    {
        $bindings = [];

        $bindings['TopTitle'] = 'Member list';
        $bindings['PageTitle'] = 'Member list';

        return view('user.member-list.index', $bindings);
    }
}
