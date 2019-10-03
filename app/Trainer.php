<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    const STATUS_PENDING = 'Pending';
    const STATUS_APPROVED = 'Approved';
    const STATUS_REJECTED = 'Rejected';
    const STATUS_DELETED = 'Deleted';

    const TEAM_INSTINCT = 'Instinct';
    const TEAM_MYSTIC = 'Mystic';
    const TEAM_VALOR = 'Valor';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'trainer_name', 'trainer_code', 'trainer_team', 'user_id', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
    ];

    /**
     * @return bool
     */
    public function isPending()
    {
        return $this->status == self::STATUS_PENDING;
    }

    /**
     * @return bool
     */
    public function isApproved()
    {
        return $this->status == self::STATUS_APPROVED;
    }

    /**
     * @return bool
     */
    public function isRejected()
    {
        return $this->status == self::STATUS_REJECTED;
    }

    /**
     * @return bool
     */
    public function isDeleted()
    {
        return $this->status == self::STATUS_DELETED;
    }

    public static function getStatusList()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_APPROVED,
            self::STATUS_REJECTED,
            self::STATUS_DELETED,
        ];
    }

    public static function getTeamList()
    {
        return [
            self::TEAM_INSTINCT => 'Instinct (yellow)',
            self::TEAM_MYSTIC => 'Mystic (blue)',
            self::TEAM_VALOR => 'Valor (red)',
        ];
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

}
