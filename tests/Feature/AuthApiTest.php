<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use function PHPSTORM_META\type;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthApiTest extends TestCase
{
    
    use DatabaseTransactions;
    
    /** @test */
    public function it_logs_in_with_valid_input_user_credentials()
    {
        $email = 'test22@o2.pl';
        $password = 'testPasswd';
        
        $user = factory(User::class, 1)->create([
            'email' => $email,
            'password' => bcrypt($password),
        ]);
        
        $response = $this->post('/api/users/login', [
            'email' => $email,
            'password' => $password,
        ]);
        
        $response->assertJsonFragment([
            'email' => $email,
        ]);
        $response->assertStatus(200);
    }
}
