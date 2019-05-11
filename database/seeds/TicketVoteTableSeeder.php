<?php

use TeachMe\Entities\TicketVote;

/**
 * Created by PhpStorm.
 * User: Sistemas
 * Date: 08/05/2019
 * Time: 02:24 PM
 */

class TicketVoteTableSeeder extends BaseSeeder
{

    protected $total = 250;

    public function getModel()
    {
        return new TicketVote();
    }

    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
       return [
           'user_id' => $this->getRandom('User')->id,
           'ticket_id' => $this->getRandom('Ticket')->id
       ];
    }


}