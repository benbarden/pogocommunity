<?php

namespace Tests\Page;

use Tests\TestCase;
use App\User;

class UserTest extends TestCase
{
    /**
     * @var User
     */
    private $userNotApproved;

    /**
     * @var User
     */
    private $userApproved;

    public function setUp(): void
    {
        parent::setUp();

        $this->userNotApproved = new User(
            ['name' => 'Nigel Not Approved', 'email' => 'nige@google.com']
        );
        $this->userApproved = new User(
            ['name' => 'Amber Approved', 'email' => 'amber@floogle.com', 'is_approved' => '1']
        );
    }

    public function tearDown(): void
    {
        parent::tearDown();
        unset($this->userNotApproved);
        unset($this->userApproved);
    }

    public function testUserDashLoggedOut(): void
    {
        $response = $this->get('/user');
        $response->assertStatus(302);
    }

    public function testUserDashApproved(): void
    {
        $this->be($this->userApproved);
        $response = $this->get('/user');
        $response->assertStatus(200);
    }

    public function testUserDashNotApproved(): void
    {
        $this->be($this->userNotApproved);
        $response = $this->get('/user');
        $response->assertStatus(200);
    }

    public function testUserMemberListApproved(): void
    {
        $this->be($this->userApproved);
        $response = $this->get('/user/member-list');
        $response->assertStatus(200);
    }

    public function testUserMemberListNotApproved(): void
    {
        $this->be($this->userNotApproved);
        $response = $this->get('/user/member-list');
        $response->assertStatus(401);
    }

}
