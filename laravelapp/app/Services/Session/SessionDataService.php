<?php

namespace App\Services\Session;

use App\Models\SessionData;

final class SessionDataService
{
    public function __construct()
    {

    }

    final public function create(int $sessionId, Array $data)
    {
        $sessionData = SessionData::query()->create([
            'session_id' => $sessionId,
            'data' => json_encode($data),
        ]);

        return $sessionData;
    }
}
