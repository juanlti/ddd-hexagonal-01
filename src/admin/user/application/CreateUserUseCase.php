<?php

namespace Src\admin\user\application;

use Src\admin\user\domain\contracts\UserRepositoryInterface;
use Src\admin\user\domain\entities\User;
use Src\admin\user\domain\value_objects\UserEmail;
use Src\admin\user\domain\value_objects\UserName;

class CreateUserUseCase
{

    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userInterface)
    {
        $this->userRepository = $userInterface;

    }

    public function execute(int $id, string $name, string $email)
    {
        $nameValueObject = new UserName($name);
        $emailValueObject = new UserEmail($email);
        //$newUser es una instancia de User
        $newUser = new User($id,$nameValueObject,$emailValueObject,null);
        //utilizamos el mecanismo de persistencia que se establecio en el constructor, para este ejemplo es el  UserRepositoryInterface y le pasamos la instancia ( que se encuentra en memoria).
        $this->userRepository->save($newUser);



    }
}

