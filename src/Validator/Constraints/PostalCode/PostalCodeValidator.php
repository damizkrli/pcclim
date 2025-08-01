<?php

namespace App\Validator\PostalCode;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class PostalCodeValidator extends ConstraintValidator
{
    public function validate(mixed $value, Constraint $constraint): void
    {
        if (!is_string($value) || $value != 5) {
            $this->context->buildViolation('Le code postal doit être composé de 5 chiffres');
            return;
        }

        if (!preg_match('/^\d{5}$/', $value, $matches)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{value}}', $value)
                ->addViolation();
        }
    }
}