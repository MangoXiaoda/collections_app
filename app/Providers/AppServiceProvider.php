<?php

namespace App\Providers;

use Dingo\Api\Http\Request;
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
        // 接管 dingoAPI 报错异常信息
        app('api.exception')->register(function (\Exception $exception) {
            $request = Request::capture();
            return app('App\Exceptions\Handler')->render($request, $exception);
        });
    }
}
