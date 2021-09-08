<?php

namespace Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail;

use Adimeo\Onix\Entity\CodeList\CodeList150;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Exception\ExtractionException;

class ProductForm extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (isset($element->ProductForm)) {
            $value = $element->ProductForm->__toString();
            try {
                $code = CodeList150::resolve($value, $this->language);
            } catch (\Exception) {
                throw new ExtractionException(
                    $element->ProductForm,
                    sprintf('Code %s not found for product form', $value)
                );
            }
            $this->product->getDescriptiveDetail()->setProductForm($code);
        }

    }
}
