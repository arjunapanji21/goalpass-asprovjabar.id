<?php

namespace Database\Seeders;

use App\Models\Anggota;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'firstname' => 'Super',
            'lastname' => 'Admin',
            'tmp_lahir' => 'Jambi',
            'tgl_lahir' => '1990-01-01',
            'no_anggota' => 'superadmin',
            'role' => 'Super Admin',
            'password' => bcrypt('rahasia'),
        ]);

        Anggota::create([
            'nama' => 'Yusuf Abdurrahman',
            'tgl_lahir' => "2009-04-09",
            'nik' => "3214010904090002",
            'klub' => "ASAD 313 ",
            'umur' => "U-13",
            'tgl_rilis' => "2023-06-23",
            'kd_kota' => "00",
            'kd_gender' => "01",
            'kd_urutkota' => "0",
            'kd_kartu' => "0001000009042009",
        ]);
        Anggota::create([
            'nama' => 'Rifki Fadila Muntafa',
            'tgl_lahir' => "2009-09-26",
            'nik' => "3217062609090006",
            'klub' => "ASAD 313 ",
            'umur' => "U-13",
            'tgl_rilis' => "2023-06-23",
            'kd_kota' => "00",
            'kd_gender' => "01",
            'kd_urutkota' => "0",
            'kd_kartu' => "0001000026092009",
        ]);
        Anggota::create([
            'nama' => 'Mohamad Rhyehan Fauziansyah',
            'tgl_lahir' => "2002-10-20",
            'nik' => "32170626748327492",
            'klub' => "ASAD 313 ",
            'umur' => "U-9",
            'tgl_rilis' => "2023-06-23",
            'kd_kota' => "00",
            'kd_gender' => "01",
            'kd_urutkota' => "0",
            'kd_kartu' => "0001000026092009",
        ]);
    }
}
