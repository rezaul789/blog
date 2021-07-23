<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Factory::create();
        foreach (range(1,6) as $index){
          Category::create([
              'user_id'=>rand(1,6),
              'name'=>substr($faker->paragraph,0,10),
              'slug'=>substr($faker->paragraph,0,10),
              'status'=>$this->random_status(),
          ]);
    }
    }
    public function random_status(){
        $status=[
            'active'=>'active',
            'inactive'=>'inactive',
        ];
        return array_rand($status,1);
    }
}
