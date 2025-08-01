<?php

namespace App\Validator\PhoneNumber;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class PhoneNumberValidator extends ConstraintValidator
{

    public function validate(mixed $value, Constraint $constraint): void
    {
        if (null === $value || '' === $value) {
            $this->context->buildViolation('Le numéro de téléphone doit contenir 10 chiffres.');
            return;
        }

        if (!preg_match($constraint->regex, $value, $matches)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $value)
                ->addViolation();
        }
    }
}