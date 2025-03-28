<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getUserRecord($id): mixed
    {
        return $this->find($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteUserRecord($id): mixed
    {
        return $this->delete($id);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function createUserRecord(array $data): mixed
    {
        return $this->create($data);
    }

    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function updateUserRecord($id, array $data): mixed
    {
        return $this->update($id, $data);
    }
}
