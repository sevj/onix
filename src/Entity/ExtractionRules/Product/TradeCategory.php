<?php

namespace Adimeo\Onix\Entity\ExtractionRules\Product;

use Adimeo\Onix\Entity\CodeList\CodeList12;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Exception\ExtractionException;
use Adimeo\Onix\Exception\ExtractionInvalidException;

class TradeCategory extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (isset($element->DescriptiveDetail->TradeCategory)) {
            $value = $element->DescriptiveDetail->TradeCategory->__toString();
            // Dilicom only accept 08 as a valid value
            if ($value !== '08') {
                throw new ExtractionInvalidException(
                    $element->DescriptiveDetail->TradeCategory,
                    'Code is not 08 trade category'
                );
            }
            try {
                $code = CodeList12::resolve($value, 'fr');
            } catch (\Exception) {
                throw new ExtractionException(
                    $element->DescriptiveDetail->TradeCategory,
                    sprintf('Code %s not found for trade category', $value)
                );
            }
            $this->product->setProductForm($code->getCode());
        }

    }
}
