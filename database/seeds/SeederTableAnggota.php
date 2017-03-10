<?php

use Illuminate\Database\Seeder;

class SeederTableAnggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('anggota')->delete();

        $anggota = array(
        	array('id'=>1, 'nama'=> 'Hario','alamat'=>'jalan rumbia no.11'),
        	array('id'=>2, 'nama'=> 'Jati','alamat'=>'jalan ikan proyek no.2'),
        	array('id'=>3, 'nama'=> 'Setyadi','alamat'=>'jalan pizza no.100'),
        	array('id'=>4, 'nama'=> 'mawar','alamat'=>'jalan wadai no.71'),
        	);

        DB::table('anggota')->insert($anggota);
    }
}