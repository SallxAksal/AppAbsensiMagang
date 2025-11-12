<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Register middleware alias for Telkom admin so we can use 'telkom.admin' in routes
        // This is safer than creating a Kernel when the project's Kernel.php is not present.
        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('telkom.admin', \App\Http\Middleware\EnsureTelkomAdmin::class);
    }
}
