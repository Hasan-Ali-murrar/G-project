<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            ['service_name' => 'معلم'],
            ['service_name' => 'مدير مدرسة'],
            ['service_name' => 'مشرف تربوي'],
            ['service_name' => 'طبيب'],
            ['service_name' => 'ممرض'],
            ['service_name' => 'صيدلي'],
            ['service_name' => 'مساعد طبيب'],
            ['service_name' => 'مدير مستشفى'],
            ['service_name' => 'مهندس مدني'],
            ['service_name' => 'مهندس كهرباء'],
            ['service_name' => 'مهندس برمجيات'],
            ['service_name' => 'فني صيانة'],
            ['service_name' => 'مدير تكنولوجيا المعلومات'],
            ['service_name' => 'مدير عام'],
            ['service_name' => 'محاسب'],
            ['service_name' => 'مدير موارد بشرية'],
            ['service_name' => 'مدير مالي'],
            ['service_name' => 'عامل اجتماعي'],
            ['service_name' => 'مستشار نفسي'],
            ['service_name' => 'مساعد اجتماعي'],
            ['service_name' => 'صحفي'],
            ['service_name' => 'محرر'],
            ['service_name' => 'مصور'],
            ['service_name' => 'مدير إعلام'],
            ['service_name' => 'مسؤول علاقات عامة'],
            ['service_name' => 'مزارع'],
            ['service_name' => 'مهندس زراعي'],
            ['service_name' => 'باحث بيئي'],
            ['service_name' => 'فني زراعي'],
            ['service_name' => 'فنان'],
            ['service_name' => 'مخرج'],
            ['service_name' => 'كاتب'],
            ['service_name' => 'مصمم جرافيك'],
            ['service_name' => 'رجل أعمال'],
            ['service_name' => 'تاجر'],
            ['service_name' => 'مدير مبيعات'],
            ['service_name' => 'محاسب تجاري'],
            ['service_name' => 'مسؤول تسويق'],
            ['service_name' => 'عامل بناء'],
            ['service_name' => 'مهندس معماري'],
            ['service_name' => 'فني تشييد'],
            ['service_name' => 'مشرف أمانة'],
            ['service_name' => 'مدير مشروع'],
            ['service_name' => 'موظف استقبال'],
            ['service_name' => 'نادل'],
            ['service_name' => 'سائق سياحي'],
            ['service_name' => 'مدير فندق'],
            ['service_name' => 'مرشد سياحي'],
            ['service_name' => 'سائق شاحنة'],
            ['service_name' => 'منسق لوجستي'],
            ['service_name' => 'مدير مستودع'],
            ['service_name' => 'فني إصلاح مركبات'],
            ['service_name' => 'حرفي'],
            ['service_name' => 'صانع مجوهرات'],
            ['service_name' => 'نجار'],
            ['service_name' => 'خياط'],
            ['service_name' => 'فنان تشكيلي'],
            ['service_name' => 'مطور برمجيات'],
            ['service_name' => 'محلل بيانات'],
            ['service_name' => 'مهندس اتصالات'],
            ['service_name' => 'مدير تكنولوجيا المعلومات'],
            ['service_name' => 'باحث علمي'],
            ['service_name' => 'أستاذ جامعي'],
            ['service_name' => 'مختبر'],
            ['service_name' => 'مهندس أبحاث'],
        ];
        DB::table('services')->insert($services);
    }
}
