<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Session\IndexRequest;
use App\Http\Requests\Auth\Session\CreateRequest;
use App\Services\Session\SessionService;
use App\Transformers\SessionTransformer;

class SessionController extends Controller
{
    public function __construct(private SessionService $sessionService)
    {
    }
    public function store(CreateRequest $request)
    {
        $session = $this->sessionService->create($request->getData());
        return responder()->success(['id' => $session->id])->respond();
    }

    public function index(IndexRequest $request)
    {
        $sessions = $this->sessionService->index($request->getData());
        return responder()->success($sessions, new SessionTransformer())->respond();
    }
}
