<?php

namespace Src\admin\user\domain\value_objects;
class UserName
{
    private string $name;


    public function __construct(string $name)
    {

        if (strlen($name) < 3) {
            throw new \InvalidArgumentException("El nombre debe tener mas de 3 caracteres");
        }

        return $this->name = $name;
    }

    public function  value(): string
    {
        return $this->name;
    }

}
