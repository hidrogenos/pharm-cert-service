<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CertificationTest extends TestCase
{
    use RefreshDatabase;

    public function testBasic()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
