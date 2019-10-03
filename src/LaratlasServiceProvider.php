<?php

namespace thelabdev\Laratlas;

use Illuminate\Support\ServiceProvider;

class LaratlasServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerPublishing();
        $this->registerResources();
    }


    public function register()
    {

    }

    protected function registerPublishing()
    {
        $this->publishes([
            __DIR__ . '/../config/laratlas.php' => config_path('laratlas.php')
        ], 'laratlas-config');
    }

    private function registerResources()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}