<?php


namespace Purt09\ProxyLine\Interfaces;


interface UserInterface
{
    /**
     * @param string $token
     * @return array
     */
    public function getBalance(string $token): array;

    /**
     * @param string $token
     * @return array
     */
    public function getSites(string $token): array;
}