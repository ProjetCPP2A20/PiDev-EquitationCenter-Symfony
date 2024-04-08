<?php
namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class AlwaysValidValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        // No validation required, always consider the value valid
    }
}
