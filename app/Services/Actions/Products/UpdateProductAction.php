<?php

namespace App\Services\Actions\Products;

use App\DTO\ProductDTO\UpdateProductDTO;
use App\Repositories\Write\Products\ProductWriteRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class UpdateProductAction
{
    private ProductWriteRepositoryInterface $productRepository;

    public function __construct(ProductWriteRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function run(int $id, UpdateProductDTO $product): Collection
    {
        return $this->productRepository->update($id, $product);
    }
}
