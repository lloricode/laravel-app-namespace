<?php
namespace Lloricode\LaravelAppNamespace\Providers;

use Illuminate\Support\ServiceProvider;
use Lloricode\LaravelAppNamespace\Console\AppNameCommand;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                AppNameCommand::class,
            ]);
        }
    }
}
