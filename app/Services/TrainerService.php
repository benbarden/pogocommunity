<?php


namespace App\Services;

use App\Trainer;


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

    public function getCount()
    {
        return Trainer::orderBy('created_at', 'desc')->count();
    }
}
