<?php

namespace App\Services\Admin;

use App\Repositories\DocumentRepository;

class DocumentService
{
    public function __construct(DocumentRepository $repo)
    {
        $this->repo = $repo;
    }
}
