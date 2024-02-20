<?php

namespace App\Repositories\Read\User;

interface UserReadRepositoryInterface
{
    public function getUser(string $user);
}
