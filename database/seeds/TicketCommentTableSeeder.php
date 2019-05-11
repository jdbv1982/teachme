<?php

use TeachMe\Entities\TicketComment;

/**
 * Created by PhpStorm.
 * User: Sistemas
 * Date: 08/05/2019
 * Time: 03:57 PM
 */

class TicketCommentTableSeeder extends BaseSeeder
{
    protected $total = 250;

    public function getModel()
    {
        return new TicketComment();
    }

    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        return [
            'user_id' => $this->getRandom('User')->id,
            'ticket_id' => $this->getRandom('Ticket')->id,
            'comment' => $faker->paragraph(),
            'link' => $faker->randomElement('', '', $faker->url)
        ];
    }
}