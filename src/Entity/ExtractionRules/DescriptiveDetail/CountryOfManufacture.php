<?php

namespace Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail;

use Adimeo\Onix\Entity\CodeList\CodeList91;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Exception\ExtractionException;

class CountryOfManufacture extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (isset($element->CountryOfManufacture)) {
            $value = $element->CountryOfManufacture->__toString();
            try {
                $code = CodeList91::resolve($value, $this->language);
            } catch (\Exception) {
                throw new ExtractionException(
                    $element->CountryOfManufacture,
                    sprintf('Code %s not found for product form', $value)
                );
            }
            $this->product->getDescriptiveDetail()->setCountryOfManufacture($code);
        }
    }
}
