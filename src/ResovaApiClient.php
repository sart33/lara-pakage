<?php


namespace ResovaApi;

use Resova\Config as ResovaConfig;
use Resova\Client as ResovaClient;

class ResovaApiClient
{
    /**
     * @return ResovaClient
     * @throws \ErrorException
     */
    public function getClient() {

        $config = new ResovaConfig(['api_key' => getenv('API_KEY')]);

        return new ResovaClient($config);

    }
}