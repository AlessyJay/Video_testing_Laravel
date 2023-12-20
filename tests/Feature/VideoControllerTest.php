<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VideoControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index()
    {
        $response = $this->get('api/videos');
        $response->assertStatus(200);
    }

    public function test_show()
    {
        $response = $this -> get('api/videos/1');
        $response->assertStatus(200);
    }
}
