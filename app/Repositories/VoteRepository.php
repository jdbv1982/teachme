<?php
/**
 * Created by PhpStorm.
 * User: Sistemas
 * Date: 15/05/2019
 * Time: 01:13 PM
 */

namespace TeachMe\Repositories;


use TeachMe\Entities\Ticket;
use TeachMe\Entities\User;

class VoteRepository
{
    public function vote(User $user, Ticket $ticket)
    {
        if($user->hasVoted($ticket)) return false;

        $user->voted()->attach($ticket);

        return true;
    }

    public function unvote(User $user, Ticket $ticket)
    {
        if( ! $user->hasVoted($ticket)) return false;

        $user->voted()->detach($ticket);
        return true;
    }
}