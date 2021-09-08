<?php

namespace Adimeo\Onix\Entity\ExtractionRules\RelatedMaterial;

use Adimeo\Onix\Entity\CodeList\CodeList5;
use Adimeo\Onix\Entity\CodeList\CodeList51;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Entity\Product\ProductIdentifier;

class RelatedProduct extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (isset($element->RelatedProduct)) {
            foreach ($element->RelatedProduct as $productElement) {
                $relatedProduct = new \Adimeo\Onix\Entity\Product\RelatedProduct();
                $relatedProduct->addProductRelationCode(CodeList51::resolve($productElement->ProductRelationCode, $this->language));

                foreach ($productElement->ProductIdentifier as $identifierElement) {
                    $productIdentifier = new ProductIdentifier();
                    $productIdentifier->setIDValue($identifierElement->IDValue);
                    $productIdentifier->setProductIDType(CodeList5::resolve($identifierElement->ProductIDType, $this->language));
                    $productIdentifier->setIDName($identifierElement->IDName);

                    $relatedProduct->addProductIdentifier($productIdentifier);
                }

                $this->product->getRelatedMaterial()->addRelatedProduct($relatedProduct);
            }
        }
    }
}
