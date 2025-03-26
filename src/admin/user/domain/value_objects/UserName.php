<?php

namespace Src\admin\user\domain\value_objects;
class UserName
{
    private string $name;


    public function __construct(string $name)
    {

        if (strlen($name) < 3) {
            throw new \Exception("El nombre debe tener mas de 3 caracteres");
        }

        return $this->name = $name;
    }

    public function  getName(): string
    {
        return $this->name;
    }

}
