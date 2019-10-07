<?php


namespace App\Services;

use App\User;


class UserService
{
    /**
     * @param $id
     * @return User
     */
    public function find($id)
    {
        return User::find($id);
    }

    public function getAll()
    {
        return User::orderBy('created_at', 'desc')->get();
    }

    public function getApproved()
    {
        return User::where('status', User::STATUS_APPROVED)->orderBy('created_at', 'desc')->get();
    }

    public function getCount()
    {
        return User::orderBy('created_at', 'desc')->count();
    }

    public function getPendingCount()
    {
        return User::where('status', User::STATUS_PENDING)->count();
    }
}
