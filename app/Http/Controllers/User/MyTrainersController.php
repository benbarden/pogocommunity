<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Traits\PogoServices;

use App\Trainer;

class MyTrainersController extends Controller
{
    use PogoServices;

    /**
     * @var array
     */
    private $validationRules = [
        'trainer_name' => ['required', 'string', 'max:30'],
        'trainer_code' => ['required', 'string', 'max:30'],
        'trainer_team' => ['required', 'string', 'max:20'],
    ];

    public function show()
    {
        $userData = Auth::user();
        $userId = $userData->id;

        $bindings = [];

        $bindings['TopTitle'] = 'My trainers';
        $bindings['PageTitle'] = 'My trainers';

        $bindings['AuthUser'] = $userData;

        $bindings['TrainerList'] = $this->getServiceTrainer()->getApprovedByUser($userId);

        return view('user.my-trainers.show', $bindings);
    }

    public function add()
    {
        $userData = Auth::user();
        $userId = $userData->id;

        $request = request();

        $bindings = [];

        if ($request->isMethod('post')) {

            //$bindings['FormMode'] = 'edit-post';

            $this->validate($request, $this->validationRules);

            $trainerData = new Trainer();
            $trainerData->trainer_name = $request->trainer_name;
            $trainerData->trainer_code = $request->trainer_code;
            $trainerData->trainer_team = $request->trainer_team;
            $trainerData->user_id = $userId;
            $trainerData->status = Trainer::STATUS_APPROVED; // Auto-approve
            $trainerData->save();

            return redirect(route('user.my-trainers.show'));

        } else {

            $bindings['FormMode'] = 'add';

        }

        $bindings['TopTitle'] = 'Add trainer';
        $bindings['PageTitle'] = 'Add trainer';

        $bindings['TeamList'] = Trainer::getTeamList();

        return view('user.my-trainers.add', $bindings);
    }

    public function edit($trainerId)
    {
        $userData = Auth::user();
        $userId = $userData->id;

        $trainerData = $this->getServiceTrainer()->find($trainerId);
        if (!$trainerData) abort(404);

        if ($trainerData->user_id != $userId) abort(403);

        $request = request();

        $bindings = [];

        if ($request->isMethod('post')) {

            $bindings['FormMode'] = 'edit-post';

            $this->validate($request, $this->validationRules);

            $trainerData->trainer_name = $request->trainer_name;
            $trainerData->trainer_code = $request->trainer_code;
            $trainerData->trainer_team = $request->trainer_team;
            $trainerData->save();

            return redirect(route('user.my-trainers.show'));

        } else {

            $bindings['FormMode'] = 'edit';

        }

        $bindings['TopTitle'] = 'Edit trainer';
        $bindings['PageTitle'] = 'Edit trainer';
        $bindings['TrainerData'] = $trainerData;
        $bindings['TrainerId'] = $trainerId;

        $bindings['TeamList'] = Trainer::getTeamList();

        return view('user.my-trainers.edit', $bindings);
    }
}
