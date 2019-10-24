<?php

namespace Thelabdev\Laratlas;

use Illuminate\Support\ServiceProvider;
use Thelabdev\Laratlas\Console\InstallCommand;

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
    $this->app->singleton('Laratlas', function ($app) {
      return new Laratlas;
    });

     $loader = \Illuminate\Foundation\AliasLoader::getInstance();
     $loader->alias('Laratlas', Laratlas::class);
  }

  protected function registerPublishing()
  {
    $this->publishes([
      __DIR__ . '/../config/laratlas.php' => config_path('laratlas.php')
    ], 'laratlas-config');

    $this->publishes([
      __DIR__ . '/../database/factories' => database_path('factories')
    ], 'laratlas-factories');

    $this->publishes([
      __DIR__ . '/../database/seeds' => database_path('seeds')
    ], 'laratlas-seeds');
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
