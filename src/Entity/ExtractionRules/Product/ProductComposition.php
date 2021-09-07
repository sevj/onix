<?php

namespace Adimeo\Onix\Entity\ExtractionRules\Product;


use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;

class ProductComposition extends AbstractProductExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (isset($element->DescriptiveDetail->ProductComposition)) {
            $value = $element->DescriptiveDetail->ProductComposition->__toString();
        }
    }
}
