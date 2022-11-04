<?php

namespace Database\Seeders;

use App\Models\GalleryCategory;
use App\Models\Site;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
            'phone2'    => '347-369-0679',
            'address'   => '993 Pacific Street, Broklyn, NY 11238'
        ]);

        $data = ['residential', 'commercial', 'interior', 'landscape'];

        foreach($data as $category){
            GalleryCategory::create([
                'user_id'=> 1,
                'name'=> $category,
                'slug'=> Str::slug($category, '-')
            ]);
        }
    }
}
