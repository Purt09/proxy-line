<?php


namespace Test\unit\Services;


use PHPUnit\Framework\TestCase;
use Purt09\ProxyLine\Services\User;

class UserTest extends TestCase
{
    private $token = '';
    
    public function testGetBalance()
    {
        $ips = new User();
        $result = $ips->getBalance($this->token);
        $this->assertArrayHasKey('balance', $result);
        $this->assertArrayHasKey('partner_balance', $result);
    }

    public function testGetSites()
    {
        $ips = new User();
        $result = $ips->getSites($this->token);
    }
}