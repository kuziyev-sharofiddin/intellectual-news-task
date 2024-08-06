<?php

namespace App\Repositories;

use App\Models\Menu;
use App\Repositories\BaseRepository;

class MenuRepository extends BaseRepository
{
    public function __construct(Menu $entity)
    {
        $this->entity = $entity;
    }
}
