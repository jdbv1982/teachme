<?php

use Faker\Generator;
use TeachMe\Entities\User;
use Faker\Factory as Faker;

class UserTableSeeder extends BaseSeeder{

    public function getModel()
    {
        return new User();
    }

    function getDummyData(Generator $faker, array $customValues = array())
    {
        return [
            'name' => $faker->name,
            'email'=> $faker->email,
            'password' => bcrypt('admin')
        ];
    }

  public function run(){

    $this->createAdmn();
    $this->createMultiple(50);

  }

  private function createAdmn(){
    User::create([
      'name' => 'David Barranco',
      'email' => 'test@test.com',
      'password' => bcrypt('admin')
    ]);
  }



}
