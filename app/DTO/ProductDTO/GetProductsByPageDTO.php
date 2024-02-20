<?php

namespace App\DTO\ProductDTO;

use App\Http\Requests\Products\GetProductsByPageRequest;

class GetProductsByPageDTO
{
    public function __construct(
        public string $perPage,
        public string $page,
    ) {}

    public static function fromRequest (GetProductsByPageRequest $request): GetProductsByPageDTO
    {
        return new self(
           perPage: $request->getPerPage(),
           page: $request->getPage()
        );
    }
}
