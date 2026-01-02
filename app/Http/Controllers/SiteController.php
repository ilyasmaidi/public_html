<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Achievement;
use App\Models\NavLink;
use App\Models\VideoSection;
use App\Models\Slider;
use App\Models\About;
use App\Models\Service;
use App\Models\CoreValue;
use App\Models\CoreValueItem;
use App\Models\Testimonial;
use App\Models\TestimonialItem;
use App\Models\OfferSection;
use App\Models\Partner;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        // 1. الإعدادات والروابط
        $settings = Setting::pluck('value', 'key');
        $nav_links = NavLink::where('is_active', true)->orderBy('position')->get();
        $achievements = Achievement::orderBy('order')->get();

        // 2. السلايدر ومن نحن
        $sliders = Slider::orderBy('order', 'asc')->get();
        $about = About::first() ?: new About();

        // 3. الفيديو (مؤمن ضد الـ null)
        $video = VideoSection::first() ?: new VideoSection();

        // 4. الخدمات
        $services = Service::orderBy('order')->get();

        // 5. القيم الجوهرية (مؤمنة)
        $coreSettings = CoreValue::first() ?: new CoreValue();
        $coreItems = CoreValueItem::all();

        // 6. آراء العملاء (مؤمنة) - لاحظ تغيير الاسم ليتطابق مع الـ Blade السابق
        $testimonialSettings = Testimonial::first() ?: new Testimonial();
        $testimonialItems = TestimonialItem::all();

        // 7. العروض والشركاء (مؤمنة)
        $offer = OfferSection::first() ?: new OfferSection();
        $partners = Partner::all();

        return view('home', compact(
            'settings', 
            'achievements', 
            'nav_links',
            'sliders', 
            'about', 
            'video', 
            'services', 
            'coreSettings', 
            'coreItems', 
            'testimonialSettings', // تأكد من استخدام هذا الاسم في الـ Blade
            'testimonialItems', 
            'offer', 
            'partners'
        ));
    }
}