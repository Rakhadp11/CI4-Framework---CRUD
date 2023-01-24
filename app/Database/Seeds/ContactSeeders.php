<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class ContactSeeders extends Seeder
{
    public function run()
    {
        // $data = [
        //     [
        //         'nama' => 'Rakha Dimas Putra',
        //         'phone' => '085772204493',
        //         'alamat' => 'Jl. Melati no.47 Ragunan, Pasar Minggu',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ],
        //     [
        //         'nama' => 'Irawan Sulistio',
        //         'phone' => '085772204493',
        //         'alamat' => 'Jl. anggur no.7 Ragunan, Pasar Minggu',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ],
        //     [
        //         'nama' => 'Wout Nistroley',
        //         'phone' => '085772204493',
        //         'alamat' => 'Jl. Duri no.47 Ragunan, Pasar Minggu',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ],
        // ];

        $faker = \Faker\Factory::create('id_ID');

        for ($i = 0; $i < 100; $i++) {
            $data = [
                [
                    'nama' => $faker->name,
                    'phone' => $faker->phoneNumber,
                    'alamat' => $faker->address,
                    'created_at' => Time::createFromTimestamp($faker->unixTime()),
                    'updated_at' => Time::now()
                ],
            ];

            //Query Builer opsi 2
            $this->db->table('contact')->insertBatch($data);
        }

        //Simple query opsi 1
        // $this->db->query(
        //     "INSERT INTO contact (nama, phone, alamat, created_at, updated_at) VALUES(:nama:, :phone:, :alamat:, :created_at:, :updated_at:)",
        //     $data
        // );


    }
}
