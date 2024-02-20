<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    const NAME = 'product_name';
    const ID = 'id';
    const IMG = 'img_url';
    const PRODUCT_TYPE = 'product_type';
    const PRICE = 'price';

    public function rules(): array
    {
        return [
            self::ID => 'required|int',
            self::NAME => 'required|string',
            self::IMG => 'required|string',
            self::PRODUCT_TYPE => 'required|string',
            self::PRICE => 'required|numeric',
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

    public function getId(): int
    {
        return $this->get(self::ID);
    }

}
