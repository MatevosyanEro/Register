<?php

namespace App\Http\Controllers\Products;

use App\Http\Requests\Products\DeleteProductRequest;
use App\Services\Actions\Products\DeleteProductAction;
use Illuminate\Routing\Controller as BaseController;

class DeleteProductController extends BaseController
{
    public function deleteProduct(
        DeleteProductRequest $request,
        DeleteProductAction  $action
    ): int
    {
        return $action->run($request->getId());
    }
}
