<?php

namespace App\Validator\Constraints\PostalCode;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class PostalCodeValidator extends ConstraintValidator
{
    public function validate(mixed $value, Constraint $constraint): void
    {

        if (!preg_match('/^\d{5}$/', $value, $matches)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{value}}', $value)
                ->addViolation();
        }
    }
}