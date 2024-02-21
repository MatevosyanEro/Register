<?php

namespace App\Http\Controllers\Products;

use App\DTO\ProductDTO\AddProductDTO;
use App\Http\Requests\Products\AddProductRequest;
use App\Services\Actions\Products\AddProductAction;
use App\Services\Resources\ProductResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class AddProductController extends BaseController
{
    public function add(
        AddProductRequest $request,
        AddProductAction  $action
    ): AnonymousResourceCollection
    {
        $data = AddProductDTO::fromRequest($request);
        return ProductResource::collection([$action->run($data)]);
    }
}
