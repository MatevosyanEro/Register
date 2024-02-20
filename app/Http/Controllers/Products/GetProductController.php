<?php

namespace App\Http\Controllers\Products;

use App\Http\Requests\Products\GetProductRequest;
use App\Services\Actions\Products\GetProductAction;
use App\Services\Resources\ProductResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller as BaseController;

class GetProductController extends BaseController
{
    public function get(
        GetProductRequest $request,
        GetProductAction  $action
    ): AnonymousResourceCollection
    {
        return ProductResource::collection($action->run($request->getId()));
    }
}
