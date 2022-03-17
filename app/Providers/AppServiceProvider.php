<?php

namespace App\Providers;

use App\Models\General;
use Illuminate\Support\Facades\View;
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
        $general = General::all();
        $data_general = [];
        foreach ($general as $gen) {
            $data_general[$gen->name] = $gen->value;
        }
        View::composer('*', function ($app) use ($data_general) {
            $app->with('data_general', $data_general);
        });
    }
}
