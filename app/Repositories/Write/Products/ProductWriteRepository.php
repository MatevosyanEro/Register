<?php

namespace App\Repositories\Write\Products;

use App\DTO\ProductDTO\AddProductDTO;
use App\DTO\ProductDTO\UpdateProductDTO;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class ProductWriteRepository implements ProductWriteRepositoryInterface
{

    public function create(AddProductDTO $data): Model
    {
        return (Product::query()->create([
            'img_url' => $data->product_img,
            'product_name' => $data->product_name,
            'product_type' => $data->product_type,
            'price' => $data->price
        ]));
    }

    public function update(int $id, UpdateProductDTO $data): Collection
    {
        Product::query()->find($id)->update([
            'img_url' => $data->product_img,
            'product_name' => $data->product_name,
            'product_type' => $data->product_type,
            'price' => $data->price
        ]);
        return Product::query()->where('id', $id)->get();
    }

    public function delete(int $id): int
    {
        return Product::query()->Where('id', $id)->delete();
    }
}
