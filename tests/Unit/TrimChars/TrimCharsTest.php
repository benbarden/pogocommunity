<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use App\Services\Filters\TrimChars;

class TrimCharsTest extends TestCase
{
    public function testTrimBasic()
    {
        $trimChars = new TrimChars();

        $input = 'abc_______________';
        $expected = 'abc_';
        $actual = $trimChars->strip($input);
        $this->assertEquals($expected, $actual);
    }
}
