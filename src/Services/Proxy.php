<?php


namespace Purt09\ProxyFamily\Services;

use Purt09\ProxyFamily\Interfaces\ProxyInterface;
use Purt09\ProxyFamily\Traits\Api;

class Proxy implements ProxyInterface
{

    use Api;

    const ENDPOINTS = [
        'list' => 'proxy/list',
        'changePassword' => 'proxy/change-password',
        'changeComment' => 'proxy/change-comment',
        'getByIds' => 'proxy/get-by-ids',
        'prolong' => 'proxy/prolong',
    ];

    /**
     * @param string $token
     * @param string $tariff_id
     * @param string $expired_at
     * @param string $sort
     * @param string|int $limit
     * @param string|int $offset
     * @return array
     */
    public function getList(string $token, string $tariff_id, string $expired_at, string $sort = "ASC", int $limit = 10, int $offset = 0): array
    {
        $url = $this->getURL(self::ENDPOINTS['list'], [], '');
        return $this->post($url, $token,  [
            'tariff_id' => $tariff_id,
            'expired_at' => $expired_at,
            'sort' => $sort,
            'limit' => $limit,
            'offset' => $offset]);
    }

    /**
     * @param string $token
     * @param string $ids
     * @param string $login
     * @param string $password
     * @return array
     */
    public function changePassword(string $token, string $ids, string $login , string $password): array
    {
        $url = $this->getURL(self::ENDPOINTS['changePassword'], [], '');
        return $this->post($url, $token,  [
            'ids' => $ids,
            'login' => $login,
            'password' => $password,
            ]);
    }

    /**
     * @param string $token
     * @param string $ids
     * @param string $comment
     * @return array
     */
    public function changeComment(string $token, string $ids, string $comment): array
    {
        $url = $this->getURL(self::ENDPOINTS['changeComment'], [], '');
        return $this->post($url, $token,  [
            'ids' => $ids,
            'comment' => $comment,
        ]);
    }

    /**
     * @param string $token
     * @param string $ids
     * @param string $tariff_id
     * @return array
     */
    public function getByIds(string $token, string $ids, string $tariff_id): array
    {
        $url = $this->getURL(self::ENDPOINTS['getByIds'], [], '');
        return $this->post($url, $token,  [
            'ids' => $ids,
            'tariff_id' => $tariff_id,
        ]);
    }

    /**
     * @param string $token
     * @param string $tariff_id
     * @param string $term_days
     * @return array
     */
    public function prolong(string $token, string $tariff_id, string $term_days): array
    {
        $url = $this->getURL(self::ENDPOINTS['prolong'], [], '');
        return $this->post($url, $token,  [
            'term_days' => $term_days,
            'tariff_id' => $tariff_id,
        ]);
    }
}