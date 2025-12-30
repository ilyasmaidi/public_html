<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Setting;
use App\Models\NavLink;
use App\Models\Achievement;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void { }

    public function boot()
{
    // جلب الروابط ومشاركتها مع كافة الـ Views
    $navLinks = \App\Models\NavLink::orderBy('position')->get();
    view()->share('global_nav_links', $navLinks);
    
    // تأكد أيضاً من مشاركة الإعدادات والإحصائيات
    view()->share('global_settings', \App\Models\Setting::pluck('value', 'key')->toArray());
    view()->share('global_achievements', \App\Models\Achievement::orderBy('order')->get());
}
}