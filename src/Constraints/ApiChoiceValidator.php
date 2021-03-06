<?php declare(strict_types = 1);

namespace JasonRoman\NbaApi\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\ConstraintDefinitionException;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

/**
 * Custom Validator class based on Symfony Choice validator.
 *
 * @Annotation
 */
class ApiChoiceValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof ApiChoice) {
            throw new UnexpectedTypeException($constraint, __NAMESPACE__.'\ApiChoice');
        }

        if (!is_array($constraint->choices)) {
            throw new ConstraintDefinitionException('The ApiChoice constraint must specify "choices" as an array');
        }

        if (null === $value) {
            return;
        }

        if (!in_array($value, $constraint->choices)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ param }}', $this->context->getPropertyName())
                ->setParameter('{{ choices }}', $this->choicesToString($constraint->choices))
                ->addViolation();
        }
    }

    /**
     * @param array $choices
     * @return string
     */
    private function choicesToString(array $choices): string
    {
        return sprintf("'%s'", implode("','", $choices));
    }
}