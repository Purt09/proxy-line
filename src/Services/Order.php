<?php


namespace Purt09\ProxyLine\Services;

use Purt09\ProxyLine\Interfaces\OrderInterface;
use Purt09\ProxyLine\Traits\Api;

class Order implements OrderInterface
{

    use Api;

    const ENDPOINTS = [
        'newOrder' => 'new-order',
        'orders' => 'orders',
        'order' => 'orders/%s/'
    ];

    /**
     * @param string $token
     * @param string $type
     * @param int $ip_version
     * @param string $country
     * @param int $quantity
     * @param int $period
     * @param string|null $coupon
     * @param string|null $new_ips
     * @param string|null $sites
     * @return array
     */
    public function newOrder(string $token,
                             string $type,
                             int $ip_version,
                             string $country,
                             int $quantity,
                             int $period,
                             string $coupon = null,
                             string $new_ips = null,
                             string $sites = null): array
    {
        $url = $this->getURL(self::ENDPOINTS['newOrder'], [], '');
        return $this->post($url, $token, [
            'type' => $type,
            'ip_version' => $ip_version,
            'country' => $country,
            'quantity' => $quantity,
            'period' => $period
        ]);
    }

    public function getOrders(string $token,
                              string $type = null,
                              int $ip_version = null,
                              string $country = null,
                              string $date_after = null,
                              string $date_before = null,
                              string $date_end_after = null,
                              string $date_end_before = null): array
    {
        $url = $this->getURL(self::ENDPOINTS['orders'], [], '');
        return $this->get($url,  [
            'api_key' => $token,
            'type' => $type,
            'ip_version' => $ip_version,
            'country' => $country,
            'date_after' => $date_after,
            'date_before' => $date_before,
            'date_end_after' => $date_end_after,
            'date_end_before' => $date_end_before,
        ]);
    }
}