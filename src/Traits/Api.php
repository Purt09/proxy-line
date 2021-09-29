<?php
declare(strict_types=1);

namespace Purt09\ProxyLine\Traits;

use GuzzleHttp\Client;

trait Api
{
    static $API_URL = "https://panel.proxyline.net/api/";

    private function post(string $url, string $token, array $params): array
    {
        foreach ($params as $key => $param) {
            if (is_null($param))
                unset($params[$key]);
        }
        $client = new Client([
            'headers' => [
                'API-KEY' => $token,
            ]
        ]);
        $result = $client->post($url, [
            'form_params' => $params,
            'allow_redirects'=> [
                'strict'=>true
            ]
        ]);
        return json_decode($result->getBody()->getContents());
    }

    private function get(string $url, array $params = [])
    {
        if (count($params) != 0)
            $url .= '?' . http_build_query($params);
        $response = file_get_contents($url);

        if ($response) {
            return json_decode($response, true);
        }
        return [];
    }

    private function getURL(string $endpoint, array $swapping = [], $version = 'v2'): string
    {
        $url = self::$API_URL . $version . $endpoint;
        if (empty($swapping)) {
            return $url;
        }

        return vsprintf($url, $swapping);
    }
}