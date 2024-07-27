<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigurationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('configurations')->insert([
            [
                'is_header' => '0',
                'is_slider' => '0',
                'is_service' => '0',
                'is_brand' => '0',
                'is_blog' => '0',
                'is_about' => '0',
                'is_contact_us' => '0',
                'is_footer' => '0',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
