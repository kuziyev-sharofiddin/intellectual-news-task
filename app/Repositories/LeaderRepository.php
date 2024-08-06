<?php

namespace App\Repositories;

use App\Models\Leader;
use App\Repositories\BaseRepository;

class LeaderRepository extends BaseRepository
{
    public function __construct(Leader $entity)
    {
        $this->entity = $entity;
    }
}
