<?php

namespace Src\admin\user\domain\entities;
class User
{

    private int $id = -1;
    private UserName $name;
    private UserEmail $email;
    private string $password;

    public function __construct(int $id, UserName $name, UserEmail $email, string $password)
    {
        $this->id = $id;
        $this->name = $name->getName();
        $this->email = $email;
        $this->password = $password;

    }
    // variables privadas

    //constructos

    //metodos propios


    //metodos
}
