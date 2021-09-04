<?php
declare(strict_types=1);

namespace Purt09\ProxyFamily\Traits;

trait Api
{
    static $API_URL = "https://www.proxy.family/api/";

    private function post(string $url, string $token, array $params): array
    {
        foreach ($params as $key => $param) {
            if(is_null($param))
                unset($params[$key]);
        }
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, 1);
        $headers = [
            'Accept: application/json',
            'Api-Token: ' . $token,
            'Content-Type: multipart/form-data'
        ];
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
        $response = curl_exec($curl);
        curl_close($curl);
        if ($response) {
            return json_decode($response, true);
        }
        return [];
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