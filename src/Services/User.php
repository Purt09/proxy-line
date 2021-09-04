<?php


namespace Purt09\ProxyFamily\Services;

use Purt09\ProxyFamily\Traits\Api;
use Purt09\ProxyFamily\Interfaces\UserInterface;

class User implements UserInterface
{

    use Api;

    const ENDPOINTS = [
        'info' => 'user/info',
        'getOrders' => 'user/get-orders',
        'getTransactions' => 'user/get-transactions'
    ];

    /**
     * @param string $token
     * @return array
     */
    public function getInfo(string $token): array
    {
        $url = $this->getURL(self::ENDPOINTS['info'], [], '');
        return $this->post($url, $token,  []);
    }

    public function getOrders(string $token, int $pending = 0, int $order_id = 0, int $limit = 10, int $offset = 0): array
    {
        $url = $this->getURL(self::ENDPOINTS['getOrders'], [], '');
        return $this->post($url, $token,  [
            'pending' => $pending,
            'order_id' => $order_id,
            'limit' => $limit,
            'offset' => $offset
        ]);
    }

    public function getTransactions(string $token, int $limit = 10, int $offset = 0): array
    {
        $url = $this->getURL(self::ENDPOINTS['getTransactions'], [], '');
        return $this->post($url, $token,  [
            'limit' => $limit,
            'offset' => $offset
        ]);
    }
}