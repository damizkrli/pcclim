<?php

namespace App\Validator\Constraints\Email;

use Symfony\Component\Validator\Constraint;

class Email extends Constraint
{
    public string $message = "Format accepté : nomprenom@gmail.com";
}
