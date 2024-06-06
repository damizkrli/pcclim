<?php

namespace App\Validator\Constraints\PhoneNumber;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class PhoneNumberValidator extends ConstraintValidator
{

    public function validate(mixed $value, Constraint $constraint): void
    {
        if (!preg_match($constraint->regex, $value, $matches)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $value)
                ->addViolation();
        }
    }
}