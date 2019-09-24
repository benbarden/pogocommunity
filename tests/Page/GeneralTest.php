<?php

namespace Tests\Page;

use Tests\TestCase;

class GeneralTest extends TestCase
{
    public function testHomepage(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
