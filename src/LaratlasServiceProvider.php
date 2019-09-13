<?php


namespace thelabdev\Laratlas;

use Illuminate\Support\ServiceProvider;

class LaratlasServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->registerPublishing();
    }


    public function register()
    {

    }

    protected function registerPublishing(){
        $this->publishes([
            __DIR__.'/../config/laratlas.php' => config_path('laratlas.php')
        ], 'laratlas');
    }
}