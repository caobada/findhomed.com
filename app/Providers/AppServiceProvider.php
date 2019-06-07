<?php

namespace App\Providers;
use Schema;
use Illuminate\Support\ServiceProvider;
use App\HomeType;
use App\Province;
use Illuminate\Support\Facades\View;
use Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        $hometype = HomeType::where('status', 1)->get();
        $province = Province::orderBy('name', 'ASC')->get();
        View::share('hometype', $hometype);
        View::share('province', $province);


        
        Config::set([
            'env.MAIL_DRIVER' => 'http://example.com'
        ]);
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
