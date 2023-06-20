<?php
namespace rajat\demo;

use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    public function boot()
    {
       // $this->publishes([__DIR__.'/../config/yourpackage.php' => config_path('yourpackage.php'),], 'config');
      // $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
      $this->loadRoutesFrom(__DIR__.'/routes/web.php');
      
     // print_r("hello");
        
        // Add more publishing tasks for other assets if needed
    }

    public function register()
    {
        // Register any package-specific bindings or services
    }
}

?>