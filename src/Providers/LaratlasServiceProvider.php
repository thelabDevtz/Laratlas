<?php

namespace Thelabdev\Laratlas\Providers;

use Illuminate\Support\ServiceProvider;
use Thelabdev\Laratlas\Console\InstallCommand;
use Thelabdev\Laratlas\Repositories\Laratlas\DistrictRepository;
use Thelabdev\Laratlas\Repositories\Laratlas\RegionRepository;
use Thelabdev\Laratlas\Repositories\Laratlas\StreetRepository;
use Thelabdev\Laratlas\Repositories\Laratlas\WardRepository;
use Thelabdev\Laratlas\Services\Laratlas;

class LaratlasServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerPublishing();
        $this->registerResources();
    }

    public function register()
    {

        // Register the main class to use with the facade
        $this->app->singleton('laratlas', function ($app) {
            return new Laratlas(
                $app['region_repository'],
                $app['district_repository'],
                $app['ward_repository'],
                $app['street_repository']
            );
        });

        //Register Region repository
        $this->app->bind('region_repository', function ($app) {
            return new RegionRepository();
        });

        //Register District repository
        $this->app->bind('district_repository', function ($app) {
            return new DistrictRepository();
        });

        //Register Ward repository
        $this->app->bind('ward_repository', function ($app){
            return new WardRepository();
        });

        //Register Street repository
        $this->app->bind('street_repository', function ($app){
            return new StreetRepository();
        });

    }

    protected function registerPublishing()
    {
        $this->publishes([
            __DIR__ . '/../../config/laratlas.php' => config_path('laratlas.php')
        ], 'laratlas-config');

        $this->publishes([
            __DIR__ . '/../../database/factories' => database_path('factories')
        ], 'laratlas-factories');

        $this->publishes([
            __DIR__ . '/../../database/seeds' => database_path('seeds')
        ], 'laratlas-seeds');
    }

    private function registerResources()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }

    private function registerCommands()
    {
        $this->commands([
            InstallCommand::class
        ]);
    }
}
