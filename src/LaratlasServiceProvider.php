<?php

namespace thelabdev\Laratlas;

use Illuminate\Support\ServiceProvider;
use thelabdev\Laratlas\Console\InstallCommand;

class LaratlasServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerPublishing();
        $this->registerResources();
        $this->registerCommands();
    }


    public function register()
    {

    }

    protected function registerPublishing()
    {
        $this->publishes([
            __DIR__ . '/../config/laratlas.php' => config_path('laratlas.php')
        ], 'laratlas-config');

        $this->publishes([
            __DIR__ . '/../database/factories' => database_path('factories')
        ], 'laratlas-factories');
    }

    private function registerResources()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    private function registerCommands()
    {
        $this->commands([
            InstallCommand::class
        ]);
    }


}