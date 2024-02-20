<?php

namespace App\Services\Actions\Auth;

use Illuminate\Support\Facades\Http;
use App\Repositories\Write\User\UserWriteRepositoryInterface;

class RegisterAction
{
    public function __construct(
        public UserWriteRepositoryInterface $userWriteRepository
    ){}

    public function run(object $user): array
    {
        $this->userWriteRepository->create($user);

        $response = Http::asForm()->post(env('PASSPORT_URL'), [
            'grant_type' => 'password',
            'client_id' => env('PASSPORT_GRANT_CLIENT_ID'),
            'client_secret' => env('PASSPORT_GRANT_CLIENT_SECRET'),
            'username' => $user->email,
            'password' => $user->password,
            'scope' => '*',
        ]);
        return $response->json();
    }
}
