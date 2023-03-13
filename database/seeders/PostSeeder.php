<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert([
            'nama'=> 'Desy Ayurianti',
            'nim'=> '2141720119',
            'kelas'=> 'TI 2G',
            'jurusan'=> 'Teknologi Informasi', 
            'prodi'=> 'D-IV Teknik Informatika', 
            'asaldaerah'=> 'Sumenep'
        ]);

        DB::table('posts')->insert([
            'nama'=> 'Maria Fadilla',
            'nim'=> '2141720063',
            'kelas'=> 'TI 2G',
            'jurusan'=> 'Teknologi Informasi', 
            'prodi'=> 'D-IV Teknik Informatika', 
            'asaldaerah'=> 'Kediri'
        ]);

        // bismillah
    }
}
