<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class configs extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('configs')->insert(
            [
                'name' => 'maintenance_mode',
                'value' => '0',
                'created_at' => time(),

            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'author',
                'value' => 'Safna',
                'created_at' => time(),

            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'site_desc',
                'value' => 'Official',
                'created_at' => time(),

            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'site_keywords',
                'value' => 'site,wubsite,',
                'created_at' => time(),

            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'site_name_fa',
                'value' => 'نام سایت',
                'created_at' => time(),

            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'site_email',
                'value' => 'your@gmail.com',
                'created_at' => time(),
            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'site_phone',
                'value' => '+98 (910) 0000000',
                'created_at' => time(),
            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'site_footer_en',
                'value' => '© Copyright All Rights Revrsed By Safna',
                'created_at' => time(),
            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'site_footer_fa',
                'value' => '© تمامی حقوق مطلق به شرکت سافنا می باشد',
                'created_at' => time(),
            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'google_tag_id',
                'value' => '00',
                'created_at' => time(),
            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'short_about_fa',
                'value' => 'توضیحات کوتاه وب سایت',
                'created_at' => time(),
            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'social_telegram',
                'value' => 'meyfox_org',
                'created_at' => time(),
            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'social_instagram',
                'value' => 'meyfox_org',
                'created_at' => time(),
            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'social_whatsapp',
                'value' => '+989100000000',
                'created_at' => time(),
            ]
        );

        DB::table('configs')->insert(
            [
                'name' => 'pay_idpay_key',
                'value' => '0',
                'created_at' => time(),
            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'sep_id',
                'value' => '0',
                'created_at' => time(),
            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'domin',
                'value' => 'http://localhost:8000',
                'created_at' => time(),
            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'r_age',
                'value' => '20',
                'created_at' => time(),
            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'r_freelancer',
                'value' => '20',
                'created_at' => time(),
            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'r_country',
                'value' => 'ایران',
                'created_at' => time(),
            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'r_enter',
                'value' => 'موزیک,ویدیو',
                'created_at' => time(),
            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'r_complate_project',
                'value' => '200',
                'created_at' => time(),
            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'r_work_houses',
                'value' => '200',
                'created_at' => time(),
            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'r_archivment',
                'value' => '200',
                'created_at' => time(),
            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'r_info',
                'value' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و',
                'created_at' => time(),
            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'r_file',
                'value' => 'resume.pdf',
                'created_at' => time(),
            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'r_avatar',
                'value' => 'main.jpg',
                'created_at' => time(),
            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'theme',
                'value' => 'defualt',
                'created_at' => time(),
            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'r_name',
                'value' => 'name',
                'created_at' => time(),
            ]
        );
        DB::table('configs')->insert(
            [
                'name' => 'r_work',
                'value' => 'your work',
                'created_at' => time(),
            ]
        );
    }
}
