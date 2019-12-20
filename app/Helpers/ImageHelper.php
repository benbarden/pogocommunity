<?php


namespace App\Helpers;

use App\Pokemon;


class ImageHelper
{
    static function spriteNormalBuilder(Pokemon $pokemon)
    {
        if (!$pokemon->sprite_normal) {
            return '';
        }

        $filePath = '/img/pokedex/sprites/gen-'.$pokemon->generation.'/'.$pokemon->sprite_normal;

        if (file_exists(public_path($filePath))) {
            return '<img src="'.$filePath.'" alt="'.$pokemon->pokemon_name.'" style="border: 0;">';
        } else {
            return '';
        }
    }

    static function spriteShinyBuilder(Pokemon $pokemon)
    {
        if (!$pokemon->sprite_shiny) {
            return '';
        }

        $filePath = '/img/pokedex/sprites/gen-'.$pokemon->generation.'/shiny/'.$pokemon->sprite_shiny;

        if (file_exists(public_path($filePath))) {
            return '<img src="'.$filePath.'" alt="'.$pokemon->pokemon_name.'" style="border: 0;">';
        } else {
            return '';
        }
    }
}
