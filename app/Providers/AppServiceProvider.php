<?php

namespace App\Providers;

use App\Example;
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
        $this->app->bind(Example::class, function () {
            return new Example('api-key-here');
        });
//        $this->app->bind('app\Example', function () {
//            $collaborator = new Collaborator();
//            $foo = 'foobar';
//
//            return new Example($collaborator, $foo);
//        });
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
