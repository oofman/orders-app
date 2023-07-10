<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ordersTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_orders(): void
    {
        $response = $this->get('/orders');
        $response->assertStatus(200);
        
    }
}
