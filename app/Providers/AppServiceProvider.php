<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Setting;
use App\Models\NavLink;
use App\Models\Achievement;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    public function register(): void { }

    public function boot()
{
    // استدعاء الواجهة في الأعلى: use Illuminate\Support\Facades\Schema;

    try {
        // حماية جلب الروابط
        if (Schema::hasTable('nav_links')) {
            $navLinks = \App\Models\NavLink::orderBy('position', 'asc')->get();
            // تأكد من استخدام هذا الاسم بالضبط في ملف الـ Blade
            view()->share('global_nav_links', $navLinks); 
        }

        // حماية جلب الإعدادات (هذا هو سبب الخطأ الأخير لديك)
        if (Schema::hasTable('settings')) {
            view()->share('global_settings', \App\Models\Setting::pluck('value', 'key')->toArray());
        }

        // حماية الإنجازات
        if (Schema::hasTable('achievements')) {
            view()->share('global_achievements', \App\Models\Achievement::orderBy('order')->get());
        }
    } catch (\Exception $e) {
        // في حال وجود أي خطأ أثناء الـ Migration، سيتجاهل لارافل الاستعلام ويكمل العمل
    }
}
}