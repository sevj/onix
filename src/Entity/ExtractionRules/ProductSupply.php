<?php

namespace Adimeo\Onix\Entity\ExtractionRules;

use Adimeo\Onix\Entity\ExtractionRules\ProductSupply\Market;
use Adimeo\Onix\Entity\ExtractionRules\ProductSupply\MarketPublishingDetail;
use Adimeo\Onix\Entity\ExtractionRules\ProductSupply\SupplyDetail;

class ProductSupply extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        $toProceed = [
            Market::class,
            MarketPublishingDetail::class,
            SupplyDetail::class,
        ];

        foreach ($toProceed as $class) {
            (new $class($this->product))->proceed($element);
        }
    }
}
