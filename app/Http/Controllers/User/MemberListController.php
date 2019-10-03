<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Traits\PogoServices;

class MemberListController extends Controller
{
    use PogoServices;

    public function showTrainers()
    {
        $trainerList = $this->getServiceTrainer()->getApproved();

        $bindings = [];

        $bindings['TopTitle'] = 'Trainer list';
        $bindings['PageTitle'] = 'Trainer list';

        $bindings['TrainerList'] = $trainerList;

        return view('user.member-list.trainers', $bindings);
    }

    public function showMembers()
    {
        $userList = $this->getServiceUser()->getApproved();

        $bindings = [];

        $bindings['TopTitle'] = 'Member list';
        $bindings['PageTitle'] = 'Member list';

        $bindings['UserList'] = $userList;

        return view('user.member-list.members', $bindings);
    }
}
