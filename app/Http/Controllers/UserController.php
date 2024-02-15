<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\JsonResponse;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;
use src\Users\Actions\CreateUserAction;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * @throws UnknownProperties
     */
    public function create(CreateUserAction $action, CreateUserRequest $request): JsonResponse
    {
        return new JsonResponse(data: $action($request->toDto()), status: Response::HTTP_OK);
    }
}
