<?php


namespace App\Services;

use App\Trainer;

use Illuminate\Support\Facades\DB;


class TrainerService
{
    /**
     * @param $id
     * @return Trainer
     */
    public function find($id)
    {
        return Trainer::find($id);
    }

    public function getAll()
    {
        return Trainer::orderBy('created_at', 'desc')->get();
    }

    public function getApproved()
    {
        return Trainer::where('status', Trainer::STATUS_APPROVED)->orderBy('created_at', 'desc')->get();
    }

    public function getApprovedByUser($userId)
    {
        return Trainer::where('user_id', $userId)->where('status', Trainer::STATUS_APPROVED)->orderBy('created_at', 'asc')->get();
    }

    public function getCount()
    {
        return Trainer::orderBy('created_at', 'desc')->count();
    }

    public function getPendingCount()
    {
        return Trainer::where('status', Trainer::STATUS_PENDING)->count();
    }

    public function getTeamCounts()
    {
        return DB::select('SELECT trainer_team, count(*) as count FROM trainers GROUP BY trainer_team');
    }
}
