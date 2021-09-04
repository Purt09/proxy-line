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
}