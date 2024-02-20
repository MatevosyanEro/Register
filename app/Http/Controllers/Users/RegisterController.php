<?php

namespace App\Http\Controllers\Users;

use App\DTO\UserDTO\RegisterDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Users\UserRegisterRequest;
use App\Services\Actions\Auth\RegisterAction;
use Illuminate\Http\JsonResponse;

class RegisterController extends Controller
{
    public function register(
        UserRegisterRequest $request,
        RegisterAction      $registerAction
    ): JsonResponse
    {
        $user = RegisterDTO::fromRequest($request);
        $data = $registerAction->run($user);
        return response()->json($data);
    }
}
