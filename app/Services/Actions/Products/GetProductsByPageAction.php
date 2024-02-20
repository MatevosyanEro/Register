<?php

namespace App\Services\Actions\Products;


use App\Repositories\Read\Product\ProductReadRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class GetProductsByPageAction
{
    private ProductReadRepositoryInterface $productRepository;

    public function __construct(ProductReadRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function run(object $data): LengthAwarePaginator
    {
        return $this->productRepository->getProdByPage($data);
    }
}
