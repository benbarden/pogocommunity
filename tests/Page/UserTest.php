<?php

namespace Tests\Page;

use Tests\TestCase;
use App\User;

class UserTest extends TestCase
{
    /**
     * @var User
     */
    private $userPending;

    /**
     * @var User
     */
    private $userApproved;

    /**
     * @var User
     */
    private $userRejected;

    public function setUp(): void
    {
        parent::setUp();

        $this->userPending = new User(
            ['name' => 'Paul Pending', 'email' => 'pending@google.com', 'status' => User::STATUS_PENDING]
        );
        $this->userApproved = new User(
            ['name' => 'Amy Approved', 'email' => 'amy@floogle.com', 'status' => User::STATUS_APPROVED]
        );
        $this->userRejected = new User(
            ['name' => 'Roger Rejected', 'email' => 'roge@ploogle.com', 'status' => User::STATUS_REJECTED]
        );
    }

    public function tearDown(): void
    {
        parent::tearDown();
        unset($this->userPending);
        unset($this->userApproved);
        unset($this->userRejected);
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

    public function testUserDashPending(): void
    {
        $this->be($this->userPending);
        $response = $this->get('/user');
        $response->assertStatus(200);
    }

    public function testUserDashRejected(): void
    {
        $this->be($this->userRejected);
        $response = $this->get('/user');
        $response->assertStatus(200);
    }

    public function testUserMemberListApproved(): void
    {
        $this->be($this->userApproved);
        $response = $this->get('/user/members');
        $response->assertStatus(200);
    }

    public function testUserMemberListPending(): void
    {
        $this->be($this->userPending);
        $response = $this->get('/user/members');
        $response->assertStatus(401);
    }

    public function testUserMemberListRejected(): void
    {
        $this->be($this->userRejected);
        $response = $this->get('/user/members');
        $response->assertStatus(401);
    }
}
