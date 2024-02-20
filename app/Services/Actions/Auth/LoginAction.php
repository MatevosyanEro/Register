<?php

namespace App\Services\Actions\Auth;

use Illuminate\Support\Facades\Http;

class LoginAction
{
    public function run(object $data): array
    {
        $response = Http::asForm()->post(env('PASSPORT_URL'), [
            'grant_type' => 'password',
            'client_id' => env('PASSPORT_GRANT_CLIENT_ID'),
            'client_secret' => env('PASSPORT_GRANT_CLIENT_SECRET'),
            'username' => $data->email,
            'password' => $data->password,
            'scope' => '*',
        ]);

        return $response->json();
    }
}
