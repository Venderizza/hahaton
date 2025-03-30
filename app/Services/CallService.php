<?php

namespace App\Services;

use App\Models\Call;

class CallService
{
    public function createCall($data): Call{
        $call = Call::query()->create($data);
        return $call;
    }
}
