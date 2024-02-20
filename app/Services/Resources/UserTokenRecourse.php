<?php

namespace App\Services\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserTokenRecourse extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            "token_type" => $this->resource["token_type"],
            "expires_in" => $this->resource["expires_in"],
            "access_token" => $this->resource["access_token"],
            "refresh_token" => $this->resource["refresh_token"],
        ];
    }
}
