<?php

namespace App\Validator\Constraints\PostalCode;

use Symfony\Component\Validator\Constraint;

class PostalCode extends Constraint
{
    public string $message = "Le code postal doit être composé de 5 chiffres";
}