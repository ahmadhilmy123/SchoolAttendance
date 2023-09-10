<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nik' => '11',
            'email' => 'admin@gmail.com',
            'phone' => '085955290636',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            'is_admin' => true
        ]);


        User::create([
            'nik' => '21',
            'email' => 'guru@gmail.com',
            'phone' => '09887675552344',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '41',
            'email' => '14@gmail.com',
            'phone' => '82373432356',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '51',
            'email' => '16@gmail.com',
            'phone' => '162536257',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '61',
            'email' => '019@gmail.com',
            'phone' => '62357257564',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '71',
            'email' => '827@gmail.com',
            'phone' => '56323525624726',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '81',
            'email' => '192@gmail.com',
            'phone' => '874124153146',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '91',
            'email' => '016@gmail.com',
            'phone' => '76237267355',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '111',
            'email' => '134@gmail.com',
            'phone' => '56156234624',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '121',
            'email' => '8715@gmail.com',
            'phone' => '75757574727723',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '143',
            'email' => '1927@gmail.com',
            'phone' => '676326381827',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '122',
            'email' => '212y@gmail.com',
            'phone' => '17632761423',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '982788',
            'email' => '272@gmail.com',
            'phone' => '273827637833462',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);


        User::create([
            'nik' => '08676',
            'email' => '245@gmail.com',
            'phone' => '9235623414236',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '808',
            'email' => '78275@gmail.com',
            'phone' => '14242634623',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '980809',
            'email' => '726375@gmail.com',
            'phone' => '927382368686',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '89079798',
            'email' => '26562532357@gmail.com',
            'phone' => '127835612352',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '89668',
            'email' => '23625@gmail.com',
            'phone' => '25626532537',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '27489',
            'email' => '82732836@gmail.com',
            'phone' => '227627572357',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '253723',
            'email' => '7796@gmail.com',
            'phone' => '928386236238',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '2372738',
            'email' => '027@gmail.com',
            'phone' => '26726852723244',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '2637263',
            'email' => '63473@gmail.com',
            'phone' => '256372473257',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '252653',
            'email' => '6868@gmail.com',
            'phone' => '523463432786783',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '5637723',
            'email' => '7525@gmail.com',
            'phone' => '235423578325452374',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '2387287',
            'email' => '236@gmail.com',
            'phone' => '3462434537457354',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '3797294',
            'email' => '3427@gmail.com',
            'phone' => '63476324237457234',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '979',
            'email' => 'u53234@gmail.com',
            'phone' => '823868236482634',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);


    }
}
