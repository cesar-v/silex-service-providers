<?php namespace CesarV\Silex\ServiceProviders;

use Silex\Application;
use Silex\ServiceProviderInterface;
use CesarV\Views\View;

class Views implements ServiceProviderInterface
{
    public function boot(Application $app) { }
    
    // ---------------------------------------------------------------------------------------------

    public function register(Application $app) 
    {
        $app['views'] = $app->share(function() use ($app) {
           return new View(array('views.dir' => $app['views.dir'])); 
        });
    }
}