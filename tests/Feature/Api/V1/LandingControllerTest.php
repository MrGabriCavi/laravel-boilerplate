<?php

namespace Tests\Feature\Api\V1;

use Tests\TestCase;

class LandingControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_landing_is_reachable()
    {
        $response = $this->get('/api/v1');

        $response->assertStatus(200);
    }
}
