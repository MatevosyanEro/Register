<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\GetUserRequest;
use App\Services\Actions\Auth\GetUserAction;
use App\Services\Resources\UserRecourse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class GetUserController extends Controller
{
    public function getUser(
        GetUserAction  $userAction,
        GetUserRequest $request
    ): AnonymousResourceCollection
    {
        return UserRecourse::collection($userAction->run($request->getEmail()));
    }
}
