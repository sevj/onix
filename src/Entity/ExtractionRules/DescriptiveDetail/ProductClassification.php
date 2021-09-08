<?php

namespace Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail;

use Adimeo\Onix\Entity\CodeList\CodeList9;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;

class ProductClassification extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (isset($element->ProductClassification)) {
            $data = $element->ProductClassification;

            $productClassification = new \Adimeo\Onix\Entity\Product\ProductClassification();
            $productClassification->setProductClassificationCode($data->ProductClassificationCode);
            $productClassification->setProductClassificationType(CodeList9::resolve($data->ProductClassificationType));
            $this->product->getDescriptiveDetail()->setProductClassification($productClassification);
        }

    }
}
