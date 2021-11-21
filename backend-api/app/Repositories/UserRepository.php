<?php

namespace App\Repositories;

use App\Models\{
    User,
    UserFavorite,
    UserAppointment
};

class UserRepository
{
    protected $user, $userFavorites, $userAppointment;

    public function __construct(User $user, UserFavorite $userFavorites, UserAppointment $userAppointment)
    {
        $this->user = $user;
        $this->userFavorites = $userFavorites;
        $this->userAppointment = $userAppointment;
    }

    public function getUserByEmail($email)
    {
        return $this->user->where('email', $email)->firstOrfail();
    }

    public function createNewUser(array $data)
    {
        return $this->user->create($data);
    }
}