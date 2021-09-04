<?php


namespace Purt09\ProxyFamily\Services;


use Purt09\ProxyFamily\Exceprtion\ProxyFamilyException;
use Purt09\ProxyFamily\Traits\Api;
use Purt09\ProxyFamily\Interfaces\UserInterface;

class User implements UserInterface
{

    use Api;

    const ENDPOINTS = [
        'info' => 'user/info',
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
}