<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Registration;
use Faker\Factory as Faker;

class RegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Generate 20 registrations
        for ($i = 0; $i < 20; $i++) {
            Registration::create([
                'nama_lengkap' => $faker->name,
                'alamat_ktp' => $faker->address,
                'alamat_saat_ini' => $faker->address,
                'kecamatan' => $faker->city,
                'kabupaten' => 'Bandung',
                'provinsi' => 'Jawa Barat',
                'nomor_telepon' => $faker->numerify('##########'),
                'email' => $faker->email,
                'kewarganegaraan' => $faker->randomElement(['WNI Asli', 'WNI Keturunan', 'WNA']),
                'tanggal_lahir' => $faker->date,
                'tempat_lahir' => 'Bandung', 
                'kabupaten_lahir' => 'Bandung', 
                'provinsi_lahir' => 'Jawa Barat', 
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'status_nikah' => $faker->randomElement(['Menikah', 'Belum Menikah', 'Lain-lain(janda/duda)']),
                'agama' => $faker->randomElement(['Islam', 'Katolik', 'Kristen', 'Hindu', 'Buddha', 'Konghucu', 'Lain-lain']),
                'users_id' => $faker->numberBetween(2, 3),
            ]);
        }
    }
}
