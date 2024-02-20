<?php

namespace App\Services\Actions\Auth;

use App\Repositories\Read\User\UserReadRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class GetUserAction
{
    private UserReadRepositoryInterface $userRepository;

    public function __construct(UserReadRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function run(string $user): Collection
    {
        return $this->userRepository->getUser($user);
    }
}
