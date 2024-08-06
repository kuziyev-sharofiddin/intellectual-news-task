<?php

namespace App\Services\Admin;

use App\Repositories\LeaderRepository;

class LeaderService
{
    public function __construct(LeaderRepository $repo)
    {
        $this->repo = $repo;
    }
}
