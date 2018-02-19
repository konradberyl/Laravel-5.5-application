<?php

namespace App\Repositories;

use App\Models\UserFields;

class UserFieldsRepository extends BaseRepository
{

    /**
     *
     * @param UserFields $model
     */
    public function __construct(UserFields $model)
    {
        $this->model = $model;
    }

    /**
     * Create new fields to specific user
     * @param int $userId
     */
    public function createFields($userId)
    {
        $data = [
            'user_id' => $userId,
            'profession' => 'kierowca'.$userId,
            'age' => '29'.$userId,
            'town' => 'Warszawa'
        ];
        $this->model->create($data);
    }
}