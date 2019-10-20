<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Traits\PogoServices;
use App\Trainer;
use App\User;

class TrainerController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    use PogoServices;

    /**
     * @var array
     */
    private $validationRules = [
        'trainer_name' => 'required',
        //'trainer_code' => 'required',
        'trainer_team' => 'required',
        'status' => 'required',
    ];

    public function showList()
    {
        $trainerList = $this->getServiceTrainer()->getAll();

        $bindings = [];

        $bindings['TopTitle'] = 'Trainer list';
        $bindings['PageTitle'] = 'Trainer list';

        $bindings['TrainerList'] = $trainerList;

        return view('staff.trainer.list', $bindings);
    }

    public function editTrainer($trainerId)
    {
        $trainerData = $this->getServiceTrainer()->find($trainerId);
        if (!$trainerData) abort(404);

        $request = request();

        $bindings = [];

        if ($request->isMethod('post')) {

            $bindings['FormMode'] = 'edit-post';

            $this->validate($request, $this->validationRules);

            $trainerData->trainer_name = $request->trainer_name;
            $trainerData->trainer_code = $request->trainer_code;
            $trainerData->trainer_team = $request->trainer_team;
            $trainerData->status = $request->status;
            $trainerData->save();

            return redirect(route('staff.trainer.list'));

        } else {

            $bindings['FormMode'] = 'edit';

        }

        $bindings['TopTitle'] = 'Staff - Edit trainer';
        $bindings['PageTitle'] = 'Edit trainer';
        $bindings['TrainerData'] = $trainerData;
        $bindings['TrainerId'] = $trainerId;

        $bindings['StatusList'] = User::getStatusList();
        $bindings['TeamList'] = Trainer::getTeamList();

        return view('staff.trainer.edit', $bindings);
    }

}
