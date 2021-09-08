<?php

namespace Adimeo\Onix\Entity\ExtractionRules\Product;

use Adimeo\Onix\Entity\CodeList\CodeList141;
use Adimeo\Onix\Entity\CodeList\CodeList142;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Exception\ExtractionException;
use Adimeo\Onix\Exception\ExtractionInvalidException;

class Barcode extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (isset($element->Barcode)) {
            $value = $element->Barcode->BarcodeType->__toString();
            if (!in_array($value, ['00', '02'])) {
                throw new ExtractionInvalidException($element->Barcode, sprintf('Barcode invalid %s', $value));
            }
            $this->product->setBarCodeType(CodeList141::resolve($value, $this->language));

            // Check position
            if (isset($element->Barcode->PositionOnProduct)) {
                $value = $element->Barcode->PositionOnProduct->__toString();
                $this->product->setBarcodePosition(CodeList142::resolve($value, $this->language));
            }
        }
    }
}
