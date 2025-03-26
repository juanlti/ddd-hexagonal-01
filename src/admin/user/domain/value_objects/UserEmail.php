<?php
namespace Src\admin\user\domain\value_objects;


use function PHPUnit\Framework\isEmpty;

class UserEmail {


    private string $email;

    public function __construct(string $email){

        if(!isEmpty($email)  && filter_var($email, FILTER_VALIDATE_EMAIL)){
           //SE CREA EL OBJETO

        }

    }
}
