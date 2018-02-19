<?php

namespace App\Repositories;

use App\Repositories\UserFieldsRepository;
use App\Models\User;

class UserRepository extends BaseRepository
{

    /**
     *
     * @param User $model
     * @param UserFieldsRepository $userFieldsModel
     */
    public function __construct(User $model,
                                UserFieldsRepository $userFieldsModel)
    {
        $this->model           = $model;
        $this->userFieldsModel = $userFieldsModel;
    }

    /**
     * Create test user with fields
     */
    public function createUserWithFields()
    {
        $count = $this->getAll()->count();

        $data = [
            'name' => 'Andrzej'.$count,
            'surname' => 'Nowak'.$count,
            'email' => 'andrzej'.$count.'@ggggg'.$count.'pl'.$count,
            'password' => bcrypt('dadada'.$count),
            'type' => 'user'
        ];

        $user = $this->create($data);

        $this->userFieldsModel->createFields($user->id);
    }

    /**
     * Return user with profession = programista
     * @return Model
     */
    public function getDeveloperProfession()
    {
        return $this->model->where('type', 'admin')->whereHas('fields',
                function($query) {

                $query->where('profession', 'programista');
            })->get();
    }
}