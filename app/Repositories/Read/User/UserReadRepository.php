<?php

namespace App\Repositories\Read\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserReadRepository implements UserReadRepositoryInterface
{
    public function getUser(string $user): Collection
    {
        return User::query()->where('email', $user)->get();
    }
}
