<?php

 namespace Ramiz\Laravelpwa;

use Illuminate\Support\ServiceProvider;
use Ramiz\Laravelpwa\commands\PublishPWA;

 class LaravelPwaServiceProvider extends ServiceProvider
 {
      
    public function register()
    {
           $this->app->singleton('laravel-pwa:publish', function ($app) {
             return new PublishPWA();
           });
    
          $this->commands([
              'laravel-pwa:publish',
          ]);   
    }
    
    public function boot(){
         $this->publishes([
               __DIR__.'/Public' => public_path('/'),
               
         ]);
    }   
    
 }