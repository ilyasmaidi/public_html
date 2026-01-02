<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. إنشاء أو تحديث مستخدم الاختبار (تجنب خطأ التكرار)
        User::updateOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => Hash::make('password'), // كلمة السر الافتراضية
            ]
        );

        // 2. تشغيل كافة السيدرات للأقسام الأخرى التي أنشأناها
        // تأكد من أنك قمت بإنشاء ملفات الـ Seeder هذه سابقاً
        $this->call([
            SliderSeeder::class,
            ServiceSeeder::class,
            TestimonialSeeder::class,
            CoreValueSeeder::class,
            OfferSeeder::class,
        ]);

        // ملاحظة: إذا لم تكن قد أنشأت ملفات منفصلة، يمكنك كتابة كود الـ Create هنا مباشرة
    }
}