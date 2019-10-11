<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Traits\PogoServices;
use App\Trainer;

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

        $teamCounts = $this->getServiceTrainer()->getTeamCounts();
        if ($teamCounts) {
            foreach ($teamCounts as &$teamCount) {
                $teamName = $teamCount->trainer_team;
                switch ($teamName) {
                    case Trainer::TEAM_INSTINCT:
                        $teamCount->colour = 'rgb(255, 205, 86)';
                        break;
                    case Trainer::TEAM_MYSTIC:
                        $teamCount->colour = 'rgb(54, 162, 235)';
                        break;
                    case Trainer::TEAM_VALOR:
                        $teamCount->colour = 'rgb(255, 99, 132)';
                        break;
                }
            }
        }
        $bindings['TeamCounts'] = $teamCounts;

        return view('user.dashboard', $bindings);
    }
}
