<?php
namespace Sunriseqf\JunitLaravel\Provider;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class JunitServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->registerRoute();
        $this->loadViewsFrom(__DIR__ . '/../Resource/view/','junit');
    }

    public function boot()
    {
        
    }

    public function RouteConfig()
    {
        return [
            'prefix' => 'junit',
            'namespace' => 'Sunriseqf\JunitLaravel\Http\Controller'
        ];
    }

    public function registerRoute()
    {
        Route::group($this->RouteConfig(),function(){
            $this->loadRoutesFrom(__DIR__ . '/../Http/Route.php');
        });
    }
}
