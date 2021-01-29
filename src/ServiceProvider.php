<?php

namespace VV\Plausible;

use Statamic\Facades\CP\Nav;
use Statamic\Providers\AddonServiceProvider;
use Statamic\Statamic;

class ServiceProvider extends AddonServiceProvider
{
    protected $routes = [
        'cp'  => __DIR__.'/../routes/cp.php',
    ];

    public function boot()
    {
        parent::boot();

        $this->createMenu();

        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'plausible');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('plausible.php'),
            ], 'plausible-config');
        }

        $this->publishConfigFile();
    }

    private function createMenu(): void
    {
        Nav::extend(function ($nav) {
            $nav->create('Plausible')
                ->section('Tools')
                ->route('plausible')
                ->icon('seo-search-graph');
        });
    }

    private function publishConfigFile()
    {
        Statamic::afterInstalled(function ($command) {
            $command->call('vendor:publish', ['--tag' => 'plausible-config',]);
        });
    }
}
