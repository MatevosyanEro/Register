<?php

namespace App\Http\Controllers\Products;

use App\DTO\ProductDTO\UpdateProductDTO;
use App\Http\Requests\Products\UpdateProductRequest;
use App\Services\Actions\Products\UpdateProductAction;
use App\Services\Resources\ProductResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller as BaseController;

class UpdateProductController extends BaseController
{
    public function updateProduct(
        UpdateProductRequest $request,
        UpdateProductAction  $action
    ): AnonymousResourceCollection
    {
        $data = UpdateProductDTO::fromRequest($request);
        return ProductResource::collection($action->run($request->getId(), $data));
    }
}
