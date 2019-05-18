<?php
/**
 * Created by PhpStorm.
 * User: Sistemas
 * Date: 08/05/2019
 * Time: 01:22 PM
 */

namespace TeachMe\Repositories;


abstract class BaseRepository{

    /**
     * @return \Teachme\Entities\Entity
     */
    abstract public function getModel();

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function newQuery()
    {
        return $this->getModel()->newQuery();
    }

    public function findOrFail($id)
    {
        return $this->newQuery()->findOrFail($id);
    }

}