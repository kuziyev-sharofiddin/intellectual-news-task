<?php

namespace App\Repositories;

use App\Models\Image;
use App\Repositories\BaseRepository;

class ImageRepository extends BaseRepository
{
    public function __construct(Image $entity)
    {
        $this->entity = $entity;
    }
}
