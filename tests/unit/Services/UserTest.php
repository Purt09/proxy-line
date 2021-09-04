<?php


namespace Test\unit\Services;


use Purt09\ProxyFamily\Services\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    private $token = '218581_1630727515_8423e3e357a70dd0448ab4f2df4aff4eb8618b83';

    public function testGetInfo(): void
    {
        $course = new User();
        $wallet_result = $course->getInfo($this->token);
        $this->assertNotNull($wallet_result['data']['user']);
    }
}