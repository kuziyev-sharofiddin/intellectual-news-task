<?php

namespace App\Repositories;

use App\Models\Pages;
use App\Repositories\BaseRepository;

class PagesRepository extends BaseRepository
{
    public function __construct(Pages $entity)
    {
        $this->entity = $entity;
    }
}
