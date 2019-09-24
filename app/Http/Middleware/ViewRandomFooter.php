<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ViewRandomFooter
{
    public function handle($request, Closure $next)
    {
        $randomFooters = [
            'a very angry shiny Pidgey',
            'a hungry Alolan Rattata',
            'a flower crown Eevee that looks at you a bit funny',
            'a shadow Snorlax who\'s been dieting and is extra hungry',
            'a level 1 Spearow with a devilish peck',
            'a rabid Bulbasaur',
            'a drunk shiny Timmy',
            'Colonel Binface',
            'a maxed shiny Rayquaza in need of a cuddle',
            'Mr. Mime in a leotard',
            'an extra large level 30 shiny Magikarp',
            'a Delibird looking for its Santa hat',
            'a Swinub on a unicycle',
            'a Lunatone floating aimlessly in the middle of the day',
            'a shiny lucky hundo flower crown Flareon with 12 legs',
            'a lemon meringue Caterpie',
            'a yellow Snover',
        ];
        \View::share('siteRandomFooters', $randomFooters);

        return $next($request);
    }
}
