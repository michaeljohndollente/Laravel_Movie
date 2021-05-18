<?php

use Illuminate\Database\Seeder;

use Faker\Factory as faker;
use App\Actor;

class ActorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    
        $faker = Faker::create(); //create a new faker object
        foreach(range(1,9) as $index){
            Actor::create([
            
                'fname' => $faker->firstName($gender = 'others'|'male'|'female'),
                'lname' => $faker->lastName(),
                'email' => $faker->unique()->email,
                ]);
        }
    }
}
