<?php


namespace Test\unit\Services;


use Purt09\ProxyFamily\Services\Order;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    private $token = '218256_1630482216_7a8afe79e7111bca4efccc6854b8b35eb7ba6a79';

    public function testCreate(): void
    {
        $order = new Order();
        $result = $order->create($this->token, 6, 3,10,'', '');
        var_dump($result);
        $this->assertNull($result['error']['code']);
    }
}