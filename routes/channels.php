<?php

use App\Models\User;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('private.{id}', function (User $user, $id) {
    return (int) $user->id === (int) $id;
});
