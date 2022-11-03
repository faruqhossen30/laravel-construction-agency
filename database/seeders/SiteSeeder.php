<?php

namespace Database\Seeders;

use App\Models\Site;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Site::create([
            'logo'      => null,
            'mobile'    => null,
            'email'     => 'miziporan@gmail.com',
            'phone'     => '929-465-6598',
            'phone2'    => '347-369-0679'
        ]);
    }
}
