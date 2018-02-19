<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    /**
     *
     * @var Model
     */
    protected $model;

    /**
     *
     * @param array $columns
     * @return Collection
     */
    public function getAll($columns = array('*'))
    {
        return $this->model->get($columns);
    }

    /**
     *
     * @param int $id
     * @param array $columns
     * @return Model|null
     */
    public function find($id, $columns = ['*'])
    {
        return $this->model->find($id, $columns);
    }

    /**
     *
     * @param array $data
     * @return Model
     */
    public function create($data)
    {
        return $this->model->create($data);
    }

    /**
     *
     * @param array $data
     * @param int $id
     * @return bool
     */
    public function update($data, $id)
    {
        return $this->model->where('id', '=', $id)->update($data);
    }

    /**
     *
     * @param array|int $id
     * @return int
     */
    public function delete($id)
    {
        return $this->model->destroy($id);
    }
}