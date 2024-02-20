<?php

namespace App\Services\Actions\Products;

use App\Repositories\Write\Products\ProductWriteRepositoryInterface;

class DeleteProductAction
{
    private ProductWriteRepositoryInterface $productRepository;

    public function __construct(ProductWriteRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function run(int $id): int
    {
        return $this->productRepository->delete($id);
    }
}
