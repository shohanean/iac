<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            'setting_name' => 'name',
            'setting_value' => 'IAC',
            'created_at' => Carbon::now()
        ]);
        DB::table('settings')->insert([
            'setting_name' => 'heading',
            'setting_value' => 'Study Abroad Consultancy Firm',
            'created_at' => Carbon::now()
        ]);
        DB::table('settings')->insert([
            'setting_name' => 'phone',
            'setting_value' => '+8801829311243',
            'created_at' => Carbon::now()
        ]);
        DB::table('settings')->insert([
            'setting_name' => 'email',
            'setting_value' => 'apply@iacedu.info',
            'created_at' => Carbon::now()
        ]);
        DB::table('settings')->insert([
            'setting_name' => 'address',
            'setting_value' => '27 Shaptak Square Lift - 7, Dhanmondi, Dhaka, Bangladesh',
            'setting_type' => 'textarea',
            'created_at' => Carbon::now()
        ]);
        DB::table('settings')->insert([
            'setting_name' => 'facebook_link',
            'setting_value' => 'https://www.facebook.com',
            'created_at' => Carbon::now()
        ]);
        DB::table('settings')->insert([
            'setting_name' => 'linkedin_link',
            'setting_value' => 'https://linkedin.com',
            'created_at' => Carbon::now()
        ]);
        DB::table('settings')->insert([
            'setting_name' => 'instagram_link',
            'setting_value' => 'https://www.instagram.com',
            'created_at' => Carbon::now()
        ]);
        DB::table('settings')->insert([
            'setting_name' => 'pinterest_link',
            'setting_value' => 'https://www.pinterest.com',
            'created_at' => Carbon::now()
        ]);
    }
}
