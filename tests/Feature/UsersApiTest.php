<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class UsersApiTest extends TestCase
{
    
    use DatabaseTransactions;
    
    /** @test */
    public function it_creates_a_user_given_valid_parameters()
    {
        $response = $this->post('/api/users', [
            'name' => 'exName',
            'email' => 'ex@email',
            'password' => 'exPass',
        ]);
        
        $response->assertStatus(Response::HTTP_CREATED);
    }
    
    /** @test */
    public function it_400s_when_trying_to_register_a_user_with_invalid_inputs()
    {
        $response = $this->post('/api/users', [
            'email' => 'ex@email',
            'password' => 'exPass',
        ]);
        
        $response->assertStatus(Response::HTTP_BAD_REQUEST);
    }
}
