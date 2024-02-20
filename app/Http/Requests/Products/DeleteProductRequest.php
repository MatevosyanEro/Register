<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class DeleteProductRequest extends FormRequest
{
    const ID = 'id';

    public function rules(): array
    {
        return [
            self::ID => 'required|numeric',
        ];
    }

    public function getId(): string
    {
        return $this->get(self::ID);
    }

}
