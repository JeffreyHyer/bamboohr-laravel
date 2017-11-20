<?php

namespace JeffreyHyer\BambooHR;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('bamboohr', function ($app) {
            $domain = $app['config']->get('services.bamboohr.domain', "");
            $api_key = $app['config']->get('services.bamboohr.key', "");

            return new \BambooHR\BambooHR($domain, $api_key);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['bamboohr'];
    }

}