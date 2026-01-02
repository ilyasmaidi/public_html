<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slider;
use App\Models\AboutSetting;
use App\Models\VideoSection;
use App\Models\ServiceItem;
use App\Models\Stat;
use App\Models\SectionSetting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema; // أضفنا هذا السطر

class MasterWebsiteSeeder extends Seeder
{
    public function run()
    {
        // الطريقة الاحترافية لتعطيل القيود في لارافل (تعمل مع SQLite و MySQL)
        Schema::disableForeignKeyConstraints();

        // تنظيف الجداول
        Slider::truncate();
        AboutSetting::truncate();
        VideoSection::truncate();
        ServiceItem::truncate();
        Stat::truncate();
        SectionSetting::truncate();

        // 1. بيانات السلايدر
        Slider::create([
            'order' => 1,
            'title_fr' => "Accompagner les entreprises\nvers la certification",
            'description_fr' => "Expertise rigoureuse en qualité, sécurité et environnement.\nOptimisez vos processus dès aujourd'hui.",
            'image' => 'assets/images/slider/slide1.jpg',
        ]);

        Slider::create([
            'order' => 2,
            'title_fr' => "VOTRE PARTENAIRE\nPOUR L’EXCELLENCE",
            'description_fr' => "CONSEIL . FORMATION . AUDIT",
            'image' => 'assets/images/slider/slide2.jpg',
            'k1_img' => 'assets/images/slider/k1.png',
            'k2_img' => 'assets/images/slider/k2.png',
            'f1_img' => 'assets/images/slider/f1.png',
        ]);

        // 2. بيانات "من نحن"
        AboutSetting::create([
            'title_fr' => 'Plus qu’un cabinet, nous sommes votre partenaire pour l’excellence.',
            'text_1_fr' => 'Nous sommes un cabinet spécialisé dans l’accompagnement des entreprises pour l’obtention de certifications.',
            'text_2_fr' => 'Notre mission : Accompagner les entreprises vers la certification à travers la formation.',
            'image' => 'https://moodle.cfuv.ru/pluginfile.php/238972/course/overviewfiles/consulting.jpg',
            'button_text_fr' => 'Découvrir Plus',
            'button_url' => '#about'
        ]);

        // 3. بيانات الخدمات (نفس مصفوفة الصورة)
        $services = [
            ['title' => 'Conseil & Stratégie', 'desc' => 'Accompagnement sur mesure pour l’obtention de certifications (ISO, HACCP, BRC)...'],
            ['title' => 'Audit & Diagnostic', 'desc' => 'Réalisation d’audits internes, audits fournisseurs...'],
            ['title' => 'Formation Pro', 'desc' => 'Développement des compétences de vos équipes (ISO, AMDEC, KPI)...'],
            ['title' => 'Sécurité Alimentaire', 'desc' => 'Expertise dédiée aux normes agroalimentaires (ISO 22000, FSSC, HACCP)...'],
            ['title' => 'Qualité & HSE', 'desc' => 'Optimisation de la qualité (ISO 9001), de l’environnement (ISO 14001)...'],
            ['title' => 'Performance Durable', 'desc' => 'Mise en place d’outils d’amélioration continue...'],
        ];

        foreach ($services as $index => $service) {
            ServiceItem::create([
                'title_fr' => $service['title'],
                'description_fr' => $service['desc'],
                'order' => $index + 1
            ]);
        }

        // 4. عناوين الأقسام
        SectionSetting::create([
            'key' => 'causes_header',
            'subtitle_fr' => 'Expertise en Certification',
            'title_fr' => 'Nos Domaines d’Action',
            'desc_fr' => 'Nous accompagnons les entreprises vers l’excellence via le conseil, la formation et l’audit.'
        ]);

        // 5. الإحصائيات
        Stat::create(['count' => '12', 'title_fr' => 'Normes Accompagnées', 'icon' => 'flaticon-global']);
        Stat::create(['count' => '4', 'title_fr' => 'Types d’Audits Pro', 'icon' => 'flaticon-analysis']);
        Stat::create(['count' => '100', 'suffix' => '%', 'title_fr' => 'Satisfaction Client', 'icon' => 'flaticon-customer-service']);
        Stat::create(['count' => '24', 'suffix' => '/7', 'title_fr' => 'Support Technique', 'icon' => 'flaticon-help']);

        // إعادة تفعيل القيود
        Schema::enableForeignKeyConstraints();
    }
}