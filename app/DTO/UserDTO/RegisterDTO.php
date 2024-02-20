<?php

namespace App\DTO\UserDTO;

use App\Http\Requests\Users\UserRegisterRequest;

class RegisterDTO
{
    public function __construct(
        public string $name,
        public string $email,
        public string $password
    ) {}

    public static function fromRequest(UserRegisterRequest $request): RegisterDTO
    {
        return new self(
            name: $request->getName(),
            email: $request->getEmail(),
            password: $request->getPassword()
        );
    }
}
