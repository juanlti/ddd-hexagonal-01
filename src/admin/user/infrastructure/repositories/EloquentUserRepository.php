<?php

namespace Src\admin\user\infrastructure\repositories;

use App\Models\User as EloquentUser;
use Src\admin\user\domain\contracts\UserRepositoryInterface;
use Src\admin\user\domain\entities\User;
use Src\admin\user\domain\value_objects\UserEmail;
use Src\admin\user\domain\value_objects\UserName;

class EloquentUserRepository implements UserRepositoryInterface
{


    public function findById(int $id): ?User
    {
        // userFound es un objeto de eloquent.
        $userFound = EloquentUser::find($id);
        if (!$userFound) {
            return null;

        }
        // userFound lo converitmos al modelo del  dominio

        return new User($userFound->id, new UserName($userFound->name), new UserEmail($userFound->email), $userFound->password ?? '1234');
    }

    public function save(User $user): void
    {
        EloquentUser::updatedOrCreate(
            [
                'id' => $user->id(),
                'name' => $user->name()->value(),
                'email' => $user->email()->value(),


            ]


        );
    }

    public function update(User $user): void
    {
        // TODO: Implement update() method.
    }

    public function delete(User $user): void
    {
        // TODO: Implement delete() method.
    }
}
