<?php


namespace ResovaAPI;

use Resova\Config as ResovaConfig;
use Resova\Client as ResovaClient;

class ResovaApiClient
{
    /**
     * @param array $params
     * @return ResovaClient
     * @throws \ErrorException
     */
    public function getClient(array $params = []) {

        $config = new ResovaConfig(['api_key' => getenv('API_KEY')]);

        $config = array_merge($config, $params);
        return new ResovaClient($config);

    }
}