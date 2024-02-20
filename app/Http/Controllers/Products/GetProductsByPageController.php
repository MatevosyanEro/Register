<?php

namespace App\Http\Controllers\Products;

use App\DTO\ProductDTO\GetProductsByPageDTO;
use App\Http\Requests\Products\GetProductsByPageRequest;
use App\Services\Actions\Products\GetProductsByPageAction;
use App\Services\Resources\ProductResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller as BaseController;

class GetProductsByPageController extends BaseController
{
    public function getProdByPage(
        GetProductsByPageRequest $request,
        GetProductsByPageAction  $action
    ): AnonymousResourceCollection
    {
        $data = GetProductsByPageDTO::fromRequest($request);
        return ProductResource::collection($action->run($data));
    }
}
