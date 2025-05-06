<?php

namespace Src\admin\user\infrastructure\controllers;

use App\Http\Controllers\Controller;
use Src\admin\user\application\GetUserByIdUseCase;
use Src\admin\user\infrastructure\repositories\EloquentUserRepository;

final class GetUserByIdGETController extends Controller
{

    public function index(int $id)
    {
        $createUserByID = new GetUserByIdUseCase( new EloquentUserRepository());

        $userFound = $createUserByID($id);
        return response()->json([
            'info' => "id utilization: $id",
            'data' => $userFound,
        ], 200);
    }
}
