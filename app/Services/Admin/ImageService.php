<?php

namespace App\Services\Admin;

use App\Repositories\ImageRepository;

class ImageService
{
    public function __construct(ImageRepository $repo)
    {
        $this->repo = $repo;
    }
}
