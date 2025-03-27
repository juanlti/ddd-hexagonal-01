<?php

namespace Src\admin\user\domain\value_objects;


use SebastianBergmann\CodeCoverage\InvalidArgumentException;

class UserPassword
{

    private string $password;


    public function __construct(string $password)
    {
        if (!$this->isValid($password)) {
            throw new InvalidArgumentException(message: "La clave no cumple con los requisitos");
        }

        $this->password = $password;
    }

    public function value(): string
    {
        return $this->password;
    }

    private function isValid(string $password): bool
    {
        $passwordPattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
        return preg_match($passwordPattern, $password) === 1;

    }
}
