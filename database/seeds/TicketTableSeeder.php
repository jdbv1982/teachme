<?php

use TeachMe\Entities\Ticket;

/**
 * Created by PhpStorm.
 * User: Sistemas
 * Date: 08/05/2019
 * Time: 01:12 PM
 */

class TicketTableSeeder extends BaseSeeder
{

    public function getModel()
    {
        return new Ticket();
    }

    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        return [
            'title' => $faker->sentence(),
            'status'=> $faker->randomElement(['open','open','closed']),
            'user_id' => $this->getRandom('User')->id
        ];
    }

}

