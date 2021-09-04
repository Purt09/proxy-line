<?php


namespace Purt09\ProxyFamily\Interfaces;


interface ProxyInterface
{
    /**
     * @param string $token
     * @param string $tariff_id
     * @param string $expired_at
     * @param string $sort
     * @param int $limit
     * @param int $offset
     * @return array
     */
    public function getList(string $token, string $tariff_id, string $expired_at, string $sort, int $limit, int $offset): array;


    /**
     * @param string $token
     * @param string $ids
     * @param string $login
     * @param string $password
     * @return array
     */
    public function changePassword(string $token, string $ids, string $login , string $password): array;

    /**
     * @param string $token
     * @param string $ids
     * @param string $comment
     * @return array
     */
    public function changeComment(string $token, string $ids, string $comment): array;

    /**
     * @param string $token
     * @param string $ids
     * @param string $tariff_id
     * @return array
     */
    public function getByIds(string $token, string $ids, string $tariff_id): array;

    /**
     * @param string $token
     * @param string $tariff_id
     * @param string $term_days
     * @return array
     */
    public function prolong(string $token, string $tariff_id, string $term_days): array;
}