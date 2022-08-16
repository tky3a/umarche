<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SampleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     * サービスを登録する関数
     */
    public function register()
    {
        app()->bind('serviceProviderTest', function () {
            return 'サービスプロバイダーのテスト';
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     * 全サービスプロバイダー読み込み後に実行したいコード
     */
    public function boot()
    {
        //
    }
}
