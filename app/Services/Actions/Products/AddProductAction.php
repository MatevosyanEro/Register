<?php

namespace App\Services\Actions\Products;

use App\DTO\ProductDTO\AddProductDTO;
use App\Models\Product;
use App\Repositories\Write\Products\ProductWriteRepositoryInterface;

class AddProductAction
{
    private ProductWriteRepositoryInterface $productRepository;

    public function __construct(ProductWriteRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function run(AddProductDTO $user): Product
    {
       return $this->productRepository->create($user);
    }
}
