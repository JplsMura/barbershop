<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Services\UserService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
        $this->middleware('auth:api', ['except' => ['create', 'login']]);
    }

    public function create(UserRequest $request)
    {
        $user = $this->userService->createNewUser($request->validated());

        return new UserResource($user);
    }
}
