<?php


namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;

class BaseRepository
{

    protected Model $entity;

    public function getQuery()
    {
        return $this->entity->query();
    }

    public function getPaginate($perPage = null)
    {
        if ($perPage) return $this->entity->paginate($perPage);

        return $this->entity->query()->get();
    }

    public function store($params)
    {
        return $this->entity->query()->create($params);
    }

    public function update(array $params, int $id)
    {
        $query = $this->getById($id);
        if ($query) {
            $query->query()->update($params);
            return $query;
        } else {
            return false;
        }
    }

    public function getById(int $id)
    {
        return $this->entity->query()->findOrFail($id);
    }

    public function destroy(int $id)
    {
        $entity = $this->getById($id);
        return ($entity) ? $entity->query()->delete() : false;
    }

    public function insert($rows)
    {
        return $this->entity->query()->insert($rows);
    }

    public function updateOrCreate($params, $conditions)
    {
        return $this->entity->query()->updateOrCreate($params, $conditions);
    }
}
