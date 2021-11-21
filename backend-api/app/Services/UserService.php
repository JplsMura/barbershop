<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    protected $repository;

    public function __construct(UserRepository $userRepository)
    {
        $this->repository = $userRepository;
    }

    public function createNewUser(array $data)
    {
        return $this->repository->createNewUser($data);
    }
}