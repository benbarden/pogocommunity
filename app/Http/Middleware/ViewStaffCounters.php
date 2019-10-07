<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ViewStaffCounters
{
    public function handle($request, Closure $next)
    {
        $serviceUser = resolve('App\Services\UserService');
        $serviceTrainer = resolve('App\Services\TrainerService');

        $staffPendingUserCount = $serviceUser->getPendingCount();
        $staffPendingTrainerCount = $serviceTrainer->getPendingCount();
        $staffPendingTotalCount = $staffPendingUserCount + $staffPendingTrainerCount;
        \View::share('staffPendingUserCount', $staffPendingUserCount);
        \View::share('staffPendingTrainerCount', $staffPendingTrainerCount);
        \View::share('staffPendingTotalCount', $staffPendingTotalCount);

        return $next($request);
    }
}
