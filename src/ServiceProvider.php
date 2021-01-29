<?php

namespace VV\Classify;

use Statamic\Providers\AddonServiceProvider;
use Statamic\Statamic;

class ServiceProvider extends AddonServiceProvider
{
    public function boot()
    {
        parent::boot();

        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'plausible');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('plausible.php'),
            ], 'plausible config');
        }
    }
}