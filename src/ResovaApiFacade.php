<?php


namespace ResovaApi;


use Illuminate\Support\Facades\Facade;

class ResovaApiFacade extends Facade
{
    protected static function getFacadeAccessor() {

        return ResovaApiClient::class;

    }

}