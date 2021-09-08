<?php

namespace Adimeo\Onix\Entity\ExtractionRules\ProductSupply;

use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Entity\Product\Territory;

class Market extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (isset($element->Market)) {
            $market = new \Adimeo\Onix\Entity\Product\Market();

            if (isset($element->Market->Territory)) {
                $territoryElement = $element->Market->Territory;

                $territory = new Territory();

                isset($territoryElement->CountriesExcluded) ? $territory->setCountriesExcluded($territoryElement->CountriesExcluded) : null;
                isset($territoryElement->CountriesIncluded) ? $territory->setCountriesIncluded($territoryElement->CountriesIncluded) : null;
                isset($territoryElement->RegionsExcluded) ? $territory->setRegionsExcluded($territoryElement->RegionsExcluded) : null;
                isset($territoryElement->RegionsIncluded) ? $territory->setRegionsIncluded($territoryElement->RegionsIncluded) : null;

                $market->setTerritory($territory);
            }

            $this->product->getProductSupply()->setMarket($market);
        }
    }
}
