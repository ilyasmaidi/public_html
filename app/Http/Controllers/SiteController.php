<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Achievement;
use App\Models\NavLink;
use App\Models\VideoSection;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        // جلب الإعدادات وتحويلها لمجموعة (Pluck) ليسهل التعامل معها
        $settings = Setting::pluck('value', 'key');

        // جلب الإحصائيات مرتبة
        $achievements = Achievement::orderBy('order')->get();

        // جلب روابط التنقل النشطة
        $nav_links = NavLink::where('is_active', true)->orderBy('position')->get();
        $sliders = \App\Models\Slider::orderBy('order', 'asc')->get();
        $about = \App\Models\About::first();
        $video   = VideoSection::first();

        return view('home', compact('settings', 'achievements', 'nav_links','sliders', 'about', 'video'));
    }
}