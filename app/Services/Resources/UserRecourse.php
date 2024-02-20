<?php

namespace App\Services\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserRecourse extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->resource->id,
            "name" => $this->resource->name,
            "email" => $this->resource->email,
            "email_verified_at" => $this->resource->email_verified_at,
            "created_at" => $this->resource->created_at,
            "updated_at" => $this->resource->updated_at
        ];
    }
}
