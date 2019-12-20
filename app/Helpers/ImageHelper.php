<?php


namespace App\Helpers;

use App\Pokemon;


class ImageHelper
{
    static function spriteNormalBuilder(Pokemon $pokemon, $sizeOverride = '')
    {
        if (!$pokemon->sprite_normal) {
            return '';
        }

        $filePath = '/img/pokedex/sprites/gen-'.$pokemon->generation.'/'.$pokemon->sprite_normal;

        if (file_exists(public_path($filePath))) {
            if ($sizeOverride) {
                $sizeOverrideCss = ' max-width: '.$sizeOverride.';';
            }
            return '<img src="'.$filePath.'" alt="'.$pokemon->pokemon_name.'" title="'.$pokemon->pokemon_name.'" style="border: 0;'.$sizeOverrideCss.'">';
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
            return '<img src="'.$filePath.'" alt="'.$pokemon->pokemon_name.'" title="'.$pokemon->pokemon_name.'" style="border: 0;">';
        } else {
            return '';
        }
    }

    static function imageArtworkBuilder(Pokemon $pokemon)
    {
        if (!$pokemon->image_artwork) {
            return '';
        }

        $filePath = '/img/pokedex/artwork/gen-'.$pokemon->generation.'/'.$pokemon->image_artwork;

        if (file_exists(public_path($filePath))) {
            return '<img src="'.$filePath.'" alt="'.$pokemon->pokemon_name.'" title="'.$pokemon->pokemon_name.'" style="border: 0; width: 100%;">';
        } else {
            return '';
        }
    }
}
