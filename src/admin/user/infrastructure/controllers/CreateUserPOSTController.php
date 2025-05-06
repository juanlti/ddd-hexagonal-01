<?php

namespace Src\admin\user\infrastructure\controllers;

use App\Http\Controllers\Controller;
use Src\admin\user\application\CreateUserUseCase;
use Src\admin\user\infrastructure\repositories\EloquentUserRepository;
use Src\admin\user\infrastructure\validators\CreateUserRequest;

final class CreateUserPOSTController extends Controller
{

    public function index(CreateUserRequest $request)
    {
        $validated = $request->validated();
        $createUserUseCase = new CreateUserUseCase( new EloquentUserRepository());
        $createUserUseCase->execute($validated['id'], $validated['name'], $validated['email']);
        return response()->json([
            'status' => 200,
            'data' => $createUserUseCase,
        ]);


    }
}
