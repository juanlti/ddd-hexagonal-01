<?php

namespace Src\admin\user\domain\value_objects;


use function PHPUnit\Framework\isEmpty;

class UserEmail
{


    private string $email;

    public function __construct(string $email)
    {

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new \InvalidArgumentException("El email no es valido");

        }
        $this->email = $email;

    }

    public function value(): string
    {
        return $this->email;
    }
}
