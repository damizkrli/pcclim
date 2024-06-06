<?php

namespace App\Validator\Constraints\Email;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class EmailValidator extends ConstraintValidator
{

    public function validate(mixed $value, Constraint $constraint): void
    {
        if (null === $value || '' === $value) {
            $this->context->buildViolation('Format accepté : nomprenom@gmail.com');
            return;
        }

        if (!preg_match('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/', $value, $matches)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $value)
                ->addViolation();
        }
    }
}