<?php

namespace App\DTO\ProductDTO;

use App\Http\Requests\Products\UpdateProductRequest;

class UpdateProductDTO
{
    public function __construct(
       public string $price,
       public string $product_name,
       public string $product_type,
       public string $product_img
    ) {}

    public static function fromRequest (UpdateProductRequest $request): UpdateProductDTO
    {
        return new self(
            price:$request->getPrice(),
            product_name:$request->getName(),
            product_type:$request->getType(),
            product_img:$request->getImg(),
        );
    }

}
