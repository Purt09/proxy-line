<?php


namespace Purt09\ProxyFamily\Interfaces;


interface OrderInterface
{
    /**
     * @param string $token
     * @param int $tariff_id
     * @param int $term_days
     * @param int $count
     * @param string $proxy_login
     * @param string $proxy_password
     * @return array
     */
    public function create(string $token, int $tariff_id, int $term_days, int $count, string $proxy_login, string $proxy_password): array;
}