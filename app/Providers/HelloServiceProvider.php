<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
// use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Validator;
use App\Http\Validators\HelloValidator;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *bootはアプリケーションが起動される際に割り込んで実行される処理
     *$this->app['validator]にバリデータが保管される。
     *resolverというメソッドでリゾルブ（バリデーション処理を行う）の処理を設定できる。引数にクロージャを指定。
     * @return void
     */
    public function boot()
    {
        // $validator = $this->app['validator'];
        // $validator->resolver(function ($translator, $data, $rules, $message) {
        //     return new HelloValidator($translator, $data, $rules, $message);
        // });
        Validator::extend('hello', function ($attribute, $value, $parameters, $validator) {
            return $value % 2 == 0;
        });
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
