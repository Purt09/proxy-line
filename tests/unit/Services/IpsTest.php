<?php


namespace Test\unit\Services;


use Purt09\ProxyLine\Services\Ips;
use PHPUnit\Framework\TestCase;

class IpsTest extends TestCase
{
    private $token = '';

    public function testGetIps(): void
    {
        $ips = new Ips();
        $result = $ips->getIps($this->token);
        $this->assertArrayNotHasKey('detail', $result);
    }

    public function testGetIpsCount(): void
    {
        $ips = new Ips();
        $result = $ips->getIpsCount($this->token);
        $this->assertArrayNotHasKey('detail', $result);
    }
}