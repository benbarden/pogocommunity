<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    const ID_USER_MANAGER = 1;
    const ID_POKEDEX_MANAGER = 2;

    const ROLE_USER_MANAGER = 'User manager';
    const ROLE_POKEDEX_MANAGER = 'Pokedex manager';

    public static function getRoleList()
    {
        return [
            self::ID_USER_MANAGER => self::ROLE_USER_MANAGER,
            self::ID_POKEDEX_MANAGER => self::ROLE_POKEDEX_MANAGER,
        ];
    }

    public static function getRoleFromId($roleId)
    {
        $role = null;
        switch ($roleId) {
            case self::ID_USER_MANAGER:
                $role = self::ROLE_USER_MANAGER;
                break;
            case self::ID_POKEDEX_MANAGER:
                $role = self::ROLE_POKEDEX_MANAGER;
                break;
        }

        return $role;
    }

    public static function getIdFromName($role)
    {
        $roleId = null;
        switch ($role) {
            case self::ROLE_USER_MANAGER:
                $roleId = self::ID_USER_MANAGER;
                break;
            case self::ROLE_POKEDEX_MANAGER:
                $roleId = self::ID_POKEDEX_MANAGER;
                break;
        }

        return $roleId;
    }
}
