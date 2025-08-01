<?php

namespace App\Validator\Constraints\PhoneNumber;

use Symfony\Component\Validator\Constraint;

class PhoneNumber extends Constraint {

    public $message = 'Le numéro de téléphone doit contenir 10 chiffres.';
    public $regex = '/^0\d{9}$/';


}