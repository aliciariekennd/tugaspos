<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Karyawan extends Seeder
{
        public function run()
        {
            for ($i = 0; $i <10; $i++) {
            $faker = \Faker\Factory::create('id_ID');

                $data = [
                        'nama'      => $faker->name,
                        'nip'       => $faker->numberBetween(),
                        'created_at'=> Time::createFromTimestamp($faker->unixTime()),
                        'updated_at'=> Time::now(),

                ];
            

                // Simple Queries
                // $this->db->query("INSERT INTO karyawan (nama, nip, created_at, updated_at) VALUES(:nama:, :nip:, :created_at:, :updated_at:)", $data);

                // Using Query Builder
                $this->db->table('karyawan')->insert($data);
            }
        }
}