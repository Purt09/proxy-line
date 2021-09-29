<?php


namespace Test\unit\Services;


use PHPUnit\Framework\TestCase;
use Purt09\ProxyLine\Services\Order;
use Purt09\ProxyLine\Services\User;

class OrderTest extends TestCase
{
    private $token = '2zvoe87kzjlbmfp32h24g1pbcj8d2vdd9ero2w7b';
    
    public function testNewOrder()
    {
        $ips = new Order();
        $result = $ips->newOrder(
            $this->token,
            'dedicated',
            6,
            'ru',
            1,
            5
        );
    }

    public function testGetOrders()
    {
        $ips = new Order();
        $result = $ips->getOrders(
            $this->token
        );
    }

}