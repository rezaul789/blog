<?php

namespace Database\Seeders;
use App\Models\User;
use Faker\Factory;
use Illuminate\Support\Facades\Hash;

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
            'first_name'=>"Rezaul",
            'last_name'=>"Karim",
            'email'=>"rezaul456@gmail.com",
            'password'=>Hash::make('123456')

        ]);

        $faker=Factory::create();
        foreach (range(1,5) as $index ){
            User::create([
                'first_name'=>$faker->firstName,
                'last_name'=>$faker->lastName,
                'email'=>$faker->unique()->email,
                'password'=>Hash::make($faker->password)

            ]);
        }

    }
}
