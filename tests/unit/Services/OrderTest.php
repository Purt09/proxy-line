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
        $result = $order->create($this->token, 6, 3,10);
        $this->assertNull($result['error']['code']);
    }
}