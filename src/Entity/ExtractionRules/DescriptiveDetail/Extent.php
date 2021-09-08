<?php

namespace Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail;

use Adimeo\Onix\Entity\CodeList\CodeList23;
use Adimeo\Onix\Entity\CodeList\CodeList24;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;

class Extent extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        foreach ($element->Extent as $extentElement) {
            $extent = new \Adimeo\Onix\Entity\Product\Extent();
            $extent->setExtentValue($extentElement->ExtentValue);
            $extent->setExtentType(CodeList23::resolve($extentElement->ExtentType, $this->language));
            $extent->setExtentUnit(CodeList24::resolve($extentElement->ExtentUnit, $this->language));

            $this->product->getDescriptiveDetail()->addExtent($extent);
        }
    }
}
