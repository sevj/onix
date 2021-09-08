<?php

namespace Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail;

use Adimeo\Onix\Entity\CodeList\CodeList150;
use Adimeo\Onix\Entity\CodeList\CodeList175;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Exception\ExtractionException;

class ProductFormDetail extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (isset($element->ProductFormDetail)) {
            $value = $element->ProductFormDetail->__toString();
            try {
                $code = CodeList175::resolve($value, 'fr');
            } catch (\Exception) {
                throw new ExtractionException(
                    $element->ProductFormDetail,
                    sprintf('Code %s not found for product form detail', $value)
                );
            }
            $this->product->getDescriptiveDetail()->addProductFormDetail($code);
        }

    }
}
