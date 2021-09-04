<?php


namespace Test\unit\Services;


use Purt09\ProxyFamily\Services\Order;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    private $token = '';

    public function testCreate(): void
    {
        $order = new Order();
        $result = $order->create($this->token, 1, 3,1,'bottru_test', 'bottru_test');
        $this->assertNull($result['error']['code']);
    }
}