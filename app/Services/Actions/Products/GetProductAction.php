<?php

namespace App\Services\Actions\Products;


use App\Repositories\Read\Product\ProductReadRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class GetProductAction
{
    private ProductReadRepositoryInterface $productRepository;

    public function __construct(ProductReadRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function run(int $id): Collection
    {
        return $this->productRepository->getProduct($id);
    }
}
