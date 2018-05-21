<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use Log;
use Illuminate\Support\Carbon;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //数据库跟踪
        DB::listen(function ($query) {
            // $query->sql
            // $query->bindings
            // $query->time
            Log::debug('SQL:'.$query->sql.' 消耗'.$query->time);
        });
        //日期格式
        Carbon::serializeUsing(function ($carbon) {
            return $carbon->format('Y-m-d h:i:s');
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
