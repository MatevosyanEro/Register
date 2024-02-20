<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{

    const NAME = 'name';
    const EMAIL = 'email';
    const PASSWORD = 'password';

    public function rules(): array
    {
        return [
            self::NAME =>'required|string',
            self::EMAIL => 'required|string',
            self::PASSWORD => 'required|string'
        ];
    }
    public function getEmail():string
    {
        return $this->get(self::EMAIL);
    }
    public function getPassword():string
    {
        return $this->get(self::PASSWORD);
    }

    public function getName():string
    {
        return $this->get(self::NAME);
    }
}
