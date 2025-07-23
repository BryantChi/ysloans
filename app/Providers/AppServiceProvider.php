<?php

namespace App\Providers;

use App\Models\Admin\MarqueeInfo;
use App\Models\Admin\VisitorLog;
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
        //
        View::composer(['layouts_main.hero'], function ($view) {
            // 傳遞固定區塊的資料到視圖
            $MarqueeInfo = MarqueeInfo::where('used', 1)->first();
            $view->with('marqueeText', $MarqueeInfo->marquee_text);
        });

        View::composer(['layouts_main.footer'], function ($view) {
            // 傳遞固定區塊的資料到視圖
            $ip = request()->ip();
            $today = date('Y-m-d');

            // 檢查當天是否已有該 IP 的訪問記錄
            $exists = VisitorLog::where('ip', $ip)
                ->where('visit_date', $today)
                ->exists();

            if (!$exists) {
                VisitorLog::create(['ip' => $ip, 'visit_date' => $today]);
            }

            // 取得總訪問數
            $count = VisitorLog::count();

            // 取得今日所有訪問數
            $countToday = VisitorLog::where('visit_date', $today)
                ->count();

            // 將計數資料傳遞給視圖
            $view->with('visitorCount', $count)->with('visitorCountToday', $countToday);
        });
    }
}
