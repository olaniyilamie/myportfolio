<?php

namespace App\Providers;

use Illuminate\Support\Facades\APP;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // you must add the APP class above to use this method
        // if (App::environment('production')){
        //     URL::forceScheme('https');
        // }
       
        if($this->app->environment('production')) {
           \URL::forceScheme('https');
         }
    }
}
