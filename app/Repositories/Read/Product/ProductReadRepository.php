<?php

namespace App\Repositories\Read\Product;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductReadRepository implements ProductReadRepositoryInterface
{
    public function getProduct(string $id): Collection
    {
        return Product::query()->where('id', $id)->get();
    }

    public function getProdByPage(object $data): LengthAwarePaginator
    {
        return Product::query()->paginate($data->perPage, ['*'], 'page', $data->page);
    }
}
