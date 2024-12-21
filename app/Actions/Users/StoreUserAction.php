<?php

namespace App\Actions\Users;

use App\Models\User;
use Illuminate\Support\Facades\App;

class StoreUserAction
{
    public function handle(array $data)
    {
        $user = User::create(array_merge($data));
        isset($data['roles']) ? $user->assignRole($data['roles']) : '';
        toastr('data has been saved', 'success', 'success');
        return $user;
    }
}
