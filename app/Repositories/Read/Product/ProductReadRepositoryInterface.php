<?php

namespace App\Repositories\Read\Product;

interface ProductReadRepositoryInterface
{
    public function getProduct(string $id);
    public function getProdByPage(object $data);
}
