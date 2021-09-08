<?php

namespace Adimeo\Onix\Entity\ExtractionRules;

use Adimeo\Onix\Entity\CodeList\CodeList5;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Exception\ExtractionException;
use Adimeo\Onix\Exception\ExtractionInvalidException;

class ProductIdentifier extends AbstractExtractionRule implements ExtractionRule
{
    protected array $accepted = [
        '01' => 'treatInternal',
        '03' => 'treatGTIN',
        '15' => 'treatISBN'
    ];

    protected function treatInternal($identifier)
    {
        if (isset($identifier->IDValue)) {
            $value = $identifier->IDValue->__toString();
            $id = (new \Adimeo\Onix\Entity\Product\ProductIdentifier());
            $id->setIDValue($value);
            $id->setProductIDType(CodeList5::resolve(\Adimeo\Onix\Entity\Product\ProductIdentifier::INTERNAL, $this->language));

            if (isset($identifier->IDTypeName)) {
                $id->setIDName($identifier->IDTypeName);
            }

            $this->product->addProductIdentifier($id);
        }
    }

    protected function treatGTIN($identifier)
    {
        if (isset($identifier->IDValue)) {
            $value = $identifier->IDValue->__toString();
            if (!in_array(substr($value, 0, 3), ['978', '979']) && false) {
                throw new ExtractionInvalidException($identifier, 'Identifier GTIN invalid');
            }
            $identifier = (new \Adimeo\Onix\Entity\Product\ProductIdentifier());
            $identifier->setIDValue($value);
            $identifier->setProductIDType(CodeList5::resolve(\Adimeo\Onix\Entity\Product\ProductIdentifier::GTIN, $this->language));
            $this->product->addProductIdentifier($identifier);
        }
    }

    protected function treatISBN($identifier)
    {
        if (isset($identifier->IDValue)) {
            $value = $identifier->IDValue->__toString();
            if (in_array(substr($value, 0, 3), ['999', '200', '020'])) {
                throw new ExtractionInvalidException($identifier, 'Identifier ISBN invalid');
            }
            $identifier = (new \Adimeo\Onix\Entity\Product\ProductIdentifier());
            $identifier->setIDValue($value);
            $identifier->setProductIDType(CodeList5::resolve(\Adimeo\Onix\Entity\Product\ProductIdentifier::ISBN13_TYPE, $this->language));
            $this->product->addProductIdentifier($identifier);
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
