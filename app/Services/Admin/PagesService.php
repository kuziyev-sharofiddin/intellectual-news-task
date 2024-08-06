<?php

namespace App\Services\Admin;

use App\Repositories\PagesRepository;

class PagesService
{
    public function __construct(PagesRepository $repo)
    {
        $this->repo = $repo;
    }
}
