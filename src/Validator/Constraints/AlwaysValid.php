<?php
namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
* @Annotation
*/
class AlwaysValid extends Constraint
{
public $message = 'This value should be valid.';
}
