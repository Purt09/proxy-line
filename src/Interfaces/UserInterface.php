<?php


namespace Purt09\ProxyFamily\Interfaces;


interface UserInterface
{
    /**
     * Информация об профиле
     *
     * @param string $token
     * @return array
     */
    public function getInfo(string $token): array;

    /**
     * @param string $token
     * @param int $limit
     * @param int $offset
     * @return array
     */
    public function getTransactions(string $token, int $limit = 10, int $offset = 0): array;

    /**
     * Заказы пользователя
     *
     * @param string $token
     * @param int $pending
     * @param int $order_id
     * @param int $limit
     * @param int $offset
     * @return array
     */
    public function getOrders(string $token, int $pending = 0, int $order_id = 0, int $limit = 10, int $offset = 0): array;
}