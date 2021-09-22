<?php


namespace Purt09\ProxyLine\Interfaces;


interface IpsInterface
{
    /**
     * @param string $token
     * @param string $type
     * @param int $ip_version
     * @param string $country
     * @return array
     */
    public function getIps(string $token, string $type, int $ip_version, string $country): array;

    /**
     * @param string $token
     * @param string $type
     * @param int $ip_version
     * @param string $country
     * @return array
     */
    public function getIpsCount(string $token, string $type, int $ip_version, string $country): array;
}