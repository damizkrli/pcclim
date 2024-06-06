<?php

namespace App\Validator\Constraints\PostalCode;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class PostalCodeValidator extends ConstraintValidator
{
    public function validate(mixed $value, Constraint $constraint): void
    {
        if (!is_string($value)) {
            $this->context->buildViolation('Le code postal doit être composé de 5 chiffres')
                ->addViolation();
            return;
        }

        if (!preg_match('/^\d{5}$/', $value, $matches)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{value}}', $value)
                ->addViolation();
        }
    }
}