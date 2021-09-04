<?php


namespace Test\unit\Services;


use Purt09\ProxyFamily\Services\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    private $token = '';

    public function testGetInfo(): void
    {
        $course = new User();
        $wallet_result = $course->getInfo($this->token);
        $this->assertNotNull($wallet_result['data']['user']);
    }

    public function testGetOrders(): void
    {
        $course = new User();
        $wallet_result = $course->getOrders($this->token);
        $this->assertNull($wallet_result['error']['code']);
    }

    public function testGetTransactions(): void
    {
        $course = new User();
        $wallet_result = $course->getTransactions($this->token);
        $this->assertNull($wallet_result['error']['code']);
    }
}