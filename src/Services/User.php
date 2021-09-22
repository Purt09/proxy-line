<?php


namespace Purt09\ProxyLine\Services;

use Purt09\ProxyLine\Interfaces\UserInterface;
use Purt09\ProxyLine\Traits\Api;

class User implements UserInterface
{

    use Api;

    const ENDPOINTS = [
        'balance' => 'balance',
        'sites' => 'sites',
    ];

    public function getBalance(string $token): array
    {
        $url = $this->getURL(self::ENDPOINTS['balance'], [], '');
        return $this->get($url,  [
            'api_key' => $token,
        ]);
    }

    /**
     *
     * метод в доке есть, но сам отдает 404!
     *
     * @deprecated
     * @param string $token
     * @return array
     */
    public function getSites(string $token): array
    {
        $url = $this->getURL(self::ENDPOINTS['sites'], [], '');
        return $this->get($url,  [
            'api_key' => $token,
        ]);
    }
}