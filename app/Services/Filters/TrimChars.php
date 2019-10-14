<?php

namespace App\Services\Filters;


class TrimChars
{
    public function strip($input)
    {
        $output = preg_replace('/_+/', '_', $input);
        return $output;
    }
}
