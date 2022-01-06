<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Tymon\JWTAuth\Facades\JWTAuth;

class ApiTest extends TestCase
{
    /**
     * Login as default API user and get token back.
     *
     * @return void
     */
    public function testLoginApi()
    {
        $baseUrl = url('api/auth/login');
        $email = 'm73hdi@gmail.com';
        $password = '123456';

        $response = $this->json('POST', $baseUrl, [
            'email' => $email,
            'password' => $password
        ]);

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'access_token', 'token_type', 'expires_in'
            ]);
    }


    /**
     * Test logout.
     *
     * @return void
     */
    public function testLogout()
    {
        $user = User::where('email', 'm73hdi@gmail.com')->first();
        $token = JWTAuth::fromUser($user);
        $baseUrl = url('api/auth/logout') . '?token=' . $token;
        $response = $this->json('POST', $baseUrl, []);
        $response
            ->assertStatus(200)
            ->assertExactJson([
                'message' => 'Successfully logged out'
            ]);
    }


    /**
     * Test token refresh.
     *
     * @return void
     */
    public function testRefresh()
    {
        $user = User::where('email', 'm73hdi@gmail.com')->first();
        $token = JWTAuth::fromUser($user);
        $baseUrl = url('api/auth/refresh') . '?token=' . $token;

        $response = $this->json('POST', $baseUrl, []);

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'access_token', 'token_type', 'expires_in'
            ]);
    }


    /**
     * Get all report sms.
     *
     * @return void
     */
    public function testGetAllSMS()
    {
        $user = User::where('email', 'm73hdi@gmail.com')->first();
        $token = JWTAuth::fromUser($user);
        $baseUrl = url('api/report-all-sms') . '?token=' . $token;

        $response = $this->json('GET', $baseUrl . '/', []);

        $response->assertStatus(200);
    }


    /**
     * Report SMS By Phone Number.
     *
     * @return void
     */
    public function testReportSMSByNumber()
    {
        $user = User::where('email', 'm73hdi@gmail.com')->first();
        $token = JWTAuth::fromUser($user);
        $baseUrl = url('api/report-sms-by-number') . '?token=' . $token;

        $response = $this->json('POST', $baseUrl . '/', [
            'phoneNumber' => '09355188545',

        ]);

        $response->assertStatus(200);
    }
}
