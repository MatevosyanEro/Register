<?php

namespace App\Repositories\Write\Products;

use App\DTO\ProductDTO\AddProductDTO;
use App\DTO\ProductDTO\UpdateProductDTO;

interface ProductWriteRepositoryInterface
{
    public function create(AddProductDTO $data);
    public function update(int $id, UpdateProductDTO $data);
    public function delete(int $id);
}
