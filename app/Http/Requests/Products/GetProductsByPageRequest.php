<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class GetProductsByPageRequest extends FormRequest
{
    const PER_PAGE = 'perPage';
    const PAGE = 'page';

    public function rules(): array
    {
        return [
            self::PER_PAGE => 'required|numeric',
            self::PAGE => 'required|numeric',
        ];
    }

    public function getPerPage(): string
    {
        return $this->get(self::PER_PAGE);
    }

    public function getPage(): string
    {
        return $this->get(self::PAGE);
    }

}
