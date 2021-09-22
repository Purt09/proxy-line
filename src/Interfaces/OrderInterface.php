<?php


namespace Purt09\ProxyLine\Interfaces;


interface OrderInterface
{
    /**
     * @param string $token
     * @param string $type
     * @param int $ip_version
     * @param string $country
     * @param int $quantity
     * @param int $period
     * @param string $coupon
     * @param string $new_ips
     * @param string $sites
     * @return array
     */
    public function newOrder(string $token,
                             string $type,
                             int $ip_version,
                             string $country,
                             int $quantity,
                             int $period,
                             string $coupon,
                             string $new_ips,
                             string $sites
    ): array;

    public function getOrders(string $token,
                              string $type,
                              int $ip_version,
                              string $country,
                              string $date_after,
                              string $date_before,
                              string $date_end_after,
                              string $date_end_before): array;
}