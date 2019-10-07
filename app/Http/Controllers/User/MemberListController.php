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

    public function showTrainerProfile($trainerId)
    {
        $trainerData = $this->getServiceTrainer()->find($trainerId);
        if (!$trainerData) abort(404);

        if (!$trainerData->isApproved()) abort(404);

        $bindings = [];

        $bindings['TopTitle'] = 'Trainer profile: '.$trainerData->trainer_name;
        $bindings['PageTitle'] = 'Trainer profile: '.$trainerData->trainer_name;

        $bindings['TrainerData'] = $trainerData;

        return view('user.member-list.trainerProfile', $bindings);
    }

    public function showMemberProfile($memberId)
    {
        $memberData = $this->getServiceUser()->find($memberId);
        if (!$memberData) abort(404);

        if (!$memberData->isApproved()) abort(404);

        $memberTrainers = $this->getServiceTrainer()->getApprovedByUser($memberId);

        $bindings = [];

        $bindings['TopTitle'] = 'Member profile: '.$memberData->name;
        $bindings['PageTitle'] = 'Member profile: '.$memberData->name;

        $bindings['MemberData'] = $memberData;
        $bindings['MemberTrainers'] = $memberTrainers;

        return view('user.member-list.memberProfile', $bindings);
    }
}
