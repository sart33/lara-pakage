<?php


namespace ResovaApi;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ResovaApiServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            dirname(__DIR__).'/configs/resova-api.php' => config_path('resova-api.php'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__).'/configs/resova-api.php','resova-api'
        );

        $this->app->bind(ResovaApiClient::class);
    }
}