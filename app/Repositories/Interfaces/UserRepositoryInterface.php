<?php

namespace App\Repositories\Interfaces;

interface UserRepositoryInterface
{
    public function getUserRecord($id);
    public function deleteUserRecord($id);
    public function createUserRecord(array $data);
    public function updateUserRecord($id, array $data);
}
