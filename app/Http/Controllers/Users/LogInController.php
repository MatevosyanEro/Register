<?php

namespace App\Http\Controllers\Users;

use App\DTO\UserDTO\LoginDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Users\UserLogInRequest;
use App\Services\Actions\Auth\LoginAction;
use App\Services\Resources\UserTokenRecourse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class LogInController extends Controller
{
    public function login(
        LoginAction      $loginAction,
        UserLogInRequest $request
    ): AnonymousResourceCollection
    {
        $data = LoginDTO::fromRequest($request);
        return UserTokenRecourse::collection([$loginAction->run($data)]);

    }
}
