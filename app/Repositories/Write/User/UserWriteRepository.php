<?php

namespace App\Repositories\Write\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class UserWriteRepository implements UserWriteRepositoryInterface
{
    public function create(object $data): Model
    {
        return (User::query()->create([
            'name' => $data->name,
            'email' => $data->email,
            'password' => $data->password
        ]));
    }
}
