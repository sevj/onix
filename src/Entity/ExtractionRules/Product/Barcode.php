<?php

namespace Adimeo\Onix\Entity\ExtractionRules\Product;

use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Jordan\CbdXml\Exception\ProductExtractionException;

class Barcode extends AbstractProductExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (isset($element->Barcode)) {
            $value = $element->Barcode->BarcodeType->__toString();
            if (!in_array($value, ['00', '02'])) {
                throw new ProductExtractionException($element->Barcode, sprintf('Barcode invalid %s', $value));
            }
            $this->product->setBarcode($value);

            // Check position
            if (isset($element->Barcode->PositionOnProduct)) {
                $this->product->setBarcodePosition($element->Barcode->PositionOnProduct->__toString());
            }

            return;
        }

        throw new ProductExtractionException($element, 'Barcode not found');
    }
}
