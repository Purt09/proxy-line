<?php


namespace Test\unit\Services;


use Purt09\ProxyFamily\Services\Proxy;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    private $token = '';

    public function testGetList(): void
    {
        $course = new Proxy();
        $wallet_result = $course->getList($this->token, 0, time());
        $this->assertNull($wallet_result['error']['code']);
    }

    public function testChangePassword(): void
    {
        $course = new Proxy();
        $wallet_result = $course->changePassword($this->token, 0, 's', 'as');
        $this->assertNull($wallet_result['error']['code']);
    }

    public function testChangeComment(): void
    {
        $course = new Proxy();
        $wallet_result = $course->changeComment($this->token, 0, 's');
        $this->assertNull($wallet_result['error']['code']);
    }

    public function testGetByIds(): void
    {
        $course = new Proxy();
        $wallet_result = $course->getByIds($this->token, 0, 's');
        $this->assertNull($wallet_result['error']['code']);
    }

    public function testProlong(): void
    {
        $course = new Proxy();
        $wallet_result = $course->prolong($this->token, 0, '1');
        $this->assertNull($wallet_result['error']['code']);
    }
}