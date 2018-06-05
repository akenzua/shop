<?php

namespace App\Providers;
use App\SubCategory;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // view()->composer('partials.navbar', function($view){
        //     $view->with('menu', SubCategory::all());
        // });

        $this->partialNav();
    }

    public function partialNav(){
        view()->composer('partials.header', 'App\Http\ViewComposers\NavbarComposer');
    }
    

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
