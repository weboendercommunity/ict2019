<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriPersyaratanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori_persyaratans')->insert(["nama" => "link video"]);
        DB::table('kategori_persyaratans')->insert(["nama" => "proposal"]);
        DB::table('kategori_persyaratans')->insert(["nama" => "link prototype"]);        
    }
}
