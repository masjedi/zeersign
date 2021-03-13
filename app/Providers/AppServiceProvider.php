<?php

namespace App\Providers;

use App\Competcat;
use App\Type;
use Illuminate\Support\Facades\Schema;
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


    public function boot()
    {
       Schema::defaultStringLength(199);
       view()->share('types',Type::all());
       view()->share('comcats',Competcat::all());
    }
}
