<?php

namespace App\Services\Admin;

use App\Repositories\MenuRepository;
use App\Services\BaseService;

class MenuService
{
    public function __construct(MenuRepository $repo)
    {
        $this->repo = $repo;
    }
}
