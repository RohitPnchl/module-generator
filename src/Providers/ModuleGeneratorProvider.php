<?php

namespace Developervkindia\ModuleGenerator\Providers;

use Illuminate\Support\ServiceProvider;

class ModuleGeneratorProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'views');
    }
}
