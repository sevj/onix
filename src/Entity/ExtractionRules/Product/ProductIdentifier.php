<?php

namespace Adimeo\Onix\Entity\ExtractionRules\Product;

use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Jordan\CbdXml\Exception\ProductExtractionException;

class ProductIdentifier extends AbstractProductExtractionRule implements ExtractionRule
{
    protected array $accepted = [
        '01' => 'treatInternal',
        '03' => 'treatGTIN',
        '15' => 'treatISBN'
    ];

    protected function treatInternal($identifier)
    {
        if (isset($identifier->IDValue)) {
            $this->product->setIdentifierInternal($identifier->IDValue->__toString());
        }
        if (isset($identifier->IDTypeName)) {
            $this->product->setInternalOrigin($identifier->IDTypeName->__toString());
        }
    }

    protected function treatGTIN($identifier)
    {
        if (isset($identifier->IDValue)) {
            $value = $identifier->IDValue->__toString();
            if (!in_array(substr($value, 0, 3), ['978', '979'])) {
                throw new ProductExtractionException($identifier, 'Identifier GTIN invalid');
            }
            $this->product->setIdentifierGTIN($value);
        }
    }

    protected function treatISBN($identifier)
    {
        if (isset($identifier->IDValue)) {
            $value = $identifier->IDValue->__toString();
            if (in_array(substr($value, 0, 3), ['999', '200', '020'])) {
                throw new ProductExtractionException($identifier, 'Identifier ISBN invalid');
            }
            $this->product->setIdentifierISBN($value);
        }
    }

    public function proceed(\SimpleXMLElement $element): void
    {
        foreach ($element->ProductIdentifier as $identifier) {
            if (isset($identifier->ProductIDType) && in_array($identifier->ProductIDType->__toString(), array_keys($this->accepted))) {
                $setter = $this->accepted[$identifier->ProductIDType->__toString()];
                $this->$setter($identifier);
            }
        }
    }
}
