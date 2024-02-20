<?php

namespace App\DTO\UserDTO;

use App\Http\Requests\Users\UserLoginRequest;

class LoginDTO
{
    public function __construct(
       public string $email,
       public string $password
    ){}

    public static function fromRequest(UserLoginRequest $request):LoginDTO{
        return new self(
            email: $request->getEmail(),
            password: $request->getPassword()
        );
    }
}
