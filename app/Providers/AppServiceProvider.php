<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Blade::directive('manager', function () {
            return "<?php if (Auth::user()->hasRole('manager')) : ?>";
        });
    
        Blade::directive('endmanager', function () {
            return "<?php endif; ?>";
        });

        Blade::directive('secretaire', function () {
            return "<?php if (Auth::user()->hasRole('secretaire') || Auth::user()->hasRole('manager')) : ?>";
        });
    
        Blade::directive('endsecretaire', function () {
            return "<?php endif; ?>";
        });

        Blade::directive('moniteur', function () {
            return "<?php if (Auth::user()->hasRole('moniteur')) : ?>";
        });
    
        Blade::directive('endmoniteur', function () {
            return "<?php endif; ?>";
        });
    }
}
