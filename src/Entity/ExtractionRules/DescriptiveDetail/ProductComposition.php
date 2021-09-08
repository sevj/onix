<?php

namespace Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail;

use Adimeo\Onix\Entity\CodeList\CodeList2;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Exception\ExtractionException;

class ProductComposition extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (isset($element->ProductComposition)) {
            $value = $element->ProductComposition->__toString();
            try {
                $code = CodeList2::resolve($value, $this->language);
            } catch (\Exception) {
                throw new ExtractionException(
                    $element->ProductComposition,
                    sprintf('Code %s not found for product composition', $value)
                );
            }
            $this->product->getDescriptiveDetail()->setProductComposition($code);
        }
    }
}
