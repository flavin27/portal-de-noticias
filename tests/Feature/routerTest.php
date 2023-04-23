<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class routerTest extends TestCase
{
    public function testHomeShouldLoad(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testIndexShouldLoad(): void {
        $response = $this->get('/noticias');
        $response->assertStatus(200);
    }
    public function testCreateShouldLoad(): void {
        $response = $this->get('/noticias/create');
        $response->assertStatus(200);
    }
}

