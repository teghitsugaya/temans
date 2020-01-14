<?php

namespace App\Providers;

use App\CurriculumViate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Blade::component('components.card', 'card');
        Blade::component('components.alert', 'alert');

        //create global variable curriculum viate
        view()->composer('*', function ($view) {
            $curriculumVitae = \App\CurriculumVitae::where('id_user', Auth()->user()->id)->first();
            $view->with('curriculumVitae', $curriculumVitae);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
