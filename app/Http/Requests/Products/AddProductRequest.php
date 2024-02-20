<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
{
    const NAME = 'product_name';
    const IMG = 'img_url';
    const PRODUCT_TYPE = 'product_type';
    const PRICE = 'price';

    public function rules(): array
    {
        return [
            self::NAME => 'required|string',
            self::IMG => 'required|string',
            self::PRODUCT_TYPE => 'required|string',
            self::PRICE => 'required|numeric|string',
        ];
    }

    public function getName(): string
    {
        return $this->get(self::NAME);
    }

    public function getImg(): string
    {
        return $this->get(self::IMG);
    }

    public function getType(): string
    {
        return $this->get(self::PRODUCT_TYPE);
    }

    public function getPrice(): string
    {
        return $this->get(self::PRICE);
    }

}
