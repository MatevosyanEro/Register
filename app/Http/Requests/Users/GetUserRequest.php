<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class GetUserRequest extends FormRequest
{
   const EMAIL = 'email';

    public function rules(): array
    {
        return [
            self::EMAIL => 'required|string',
        ];
    }

    public function getEmail():string
    {
        return $this->get(self::EMAIL);
    }
}
