<?php

namespace Adimeo\Onix\Entity\ExtractionRules\PublishingDetail;

use Adimeo\Onix\Entity\CodeList\CodeList44;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Entity\Product\ImprintIdentifier;

class Imprint extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (isset($element->Imprint)) {
            $imprint = new \Adimeo\Onix\Entity\Product\Imprint();
            $imprint->setImprintName($element->Imprint->ImprintName);

            foreach ($element->Imprint->ImprintIdentifier as $imprintIdentifierElement) {
                $imprintIdentifier = new ImprintIdentifier();
                $imprintIdentifier->setIDValue($imprintIdentifierElement->IDValue);
                $imprintIdentifier->setImprintIDType(CodeList44::resolve($imprintIdentifierElement->ImprintIDType, $this->language));

                $imprint->addImprintIdentifier($imprintIdentifier);
            }

            $this->product->getPublishingDetail()->setImprint($imprint);
        }
    }
}
