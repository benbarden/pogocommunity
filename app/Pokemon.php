<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $primaryKey = 'pokemon_no';

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pokemon_no', 'pokemon_name', 'generation',
        'is_available', 'is_regional', 'is_legendary', 'is_mythical',
        'buddy_distance', 'has_shiny',
        'sprite_normal', 'sprite_shiny', 'image_artwork',
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
        'is_available' => 'boolean',
        'is_regional' => 'boolean',
        'is_legendary' => 'boolean',
        'is_mythical' => 'boolean',
        'has_shiny' => 'boolean',
    ];

}
