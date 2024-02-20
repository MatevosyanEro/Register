<?php

namespace App\Services\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'img_url' => $this->resource->img_url,
            'product_name' => $this->resource->product_name,
            'product_type' => $this->resource->product_type,
            'price' => $this->resource->price
        ];
    }
}
