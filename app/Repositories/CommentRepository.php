<?php
/**
 * Created by PhpStorm.
 * User: Sistemas
 * Date: 15/05/2019
 * Time: 12:09 PM
 */

namespace TeachMe\Repositories;


use TeachMe\Entities\Ticket;
use TeachMe\Entities\TicketComment;
use TeachMe\Entities\User;

class CommentRepository extends BaseRepository
{

    /**
     * @return \Teachme\Entities\Entity
     */
    public function getModel()
    {
        return new TicketComment();
    }

    public function create(Ticket $ticket,User $user, $comment, $link = '')
    {
        $comment = new TicketComment(compact('comment','link'));
        $comment->user_id = $user->id;
        $ticket->comments()->save($comment);
    }
}