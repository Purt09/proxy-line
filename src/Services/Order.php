<?php


namespace Purt09\ProxyFamily\Services;

use Purt09\ProxyFamily\Interfaces\OrderInterface;
use Purt09\ProxyFamily\Traits\Api;

class Order implements OrderInterface
{
    use Api;

    const ENDPOINTS = [
        'create' => 'order/create',
    ];

    public function create(string $token, int $tariff_id, int $term_days, int $count, string $proxy_login = null, string $proxy_password = null): array
    {
        $url = $this->getURL(self::ENDPOINTS['create'], [], '');
        return $this->post($url, $token, [
                'tariff_id' => $tariff_id,
                'term_days' => $term_days,
                'count' => $count,
                'proxy_login' => $proxy_login,
                'proxy_password' => $proxy_password
            ]
        );
    }
}