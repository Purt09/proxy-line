<?php


namespace Purt09\ProxyLine\Services;

use Purt09\ProxyLine\Traits\Api;
use Purt09\ProxyLine\Interfaces\IpsInterface;

class Ips implements IpsInterface
{

    use Api;

    const ENDPOINTS = [
        'ips' => 'ips',
        'ipsCount' => 'ips-count',
    ];

    public function getIps(string $token, string $type = 'dedicated', int $ip_version = 4, string $country = 'ru'): array
    {
        $url = $this->getURL(self::ENDPOINTS['ips'], [], '');
        return $this->get($url,  [
            'api_key' => $token,
            'type' => $type,
            'ip_version' => $ip_version,
            'country' => $country,
        ]);
    }

    public function getIpsCount(string $token, string $type = 'dedicated', int $ip_version = 4, string $country = 'ru'): array
    {
        $url = $this->getURL(self::ENDPOINTS['ipsCount'], [], '');
        return $this->get($url,  [
            'api_key' => $token,
            'type' => $type,
            'ip_version' => $ip_version,
            'country' => $country,
        ]);
    }
}