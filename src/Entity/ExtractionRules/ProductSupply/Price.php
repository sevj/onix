<?php

namespace Adimeo\Onix\Entity\ExtractionRules\ProductSupply;

use Adimeo\Onix\Entity\CodeList\CodeList100;
use Adimeo\Onix\Entity\CodeList\CodeList171;
use Adimeo\Onix\Entity\CodeList\CodeList58;
use Adimeo\Onix\Entity\CodeList\CodeList61;
use Adimeo\Onix\Entity\CodeList\CodeList62;
use Adimeo\Onix\Entity\CodeList\CodeList96;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Entity\Product\DiscountCoded;
use Adimeo\Onix\Entity\Product\Tax;
use Adimeo\Onix\Entity\Product\Territory;

class Price extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (isset($element->Price)) {
            foreach ($element->Price as $priceElement) {
                $price = new \Adimeo\Onix\Entity\Product\Price();
                $price->setCurrencyCode(CodeList96::resolve($priceElement->CurrencyCode, $this->language));
                //$price->setPositionOnProduct();
                $price->setPriceType(CodeList58::resolve($priceElement->PriceType, $this->language));
                $price->setPriceAmount($priceElement->PriceAmount);
                if (isset($priceElement->PriceStatus)) {
                    $price->setPriceStatus(CodeList61::resolve($priceElement->PriceStatus, $this->language));
                }

                // Tax
                if (isset($priceElement->Tax)) {
                    foreach ($priceElement->Tax as $taxElement) {
                        $tax = new Tax();
                        $tax->setTaxType(CodeList171::resolve($taxElement->TaxType, $this->language));
                        $tax->setTaxAmount($taxElement->TaxAmount);
                        $tax->setTaxableAmount($taxElement->TaxableAmount);
                        if (isset($taxElement->TaxRateCode)) {
                            $tax->setTaxRateCode(CodeList62::resolve($taxElement->TaxRateCode, $this->language));
                        }
                        $tax->setTaxRatePercent($taxElement->TaxRatePercent);

                        $price->addTax($tax);
                    }
                }

                // Territory
                if (isset($priceElement->Territory)) {
                    $territoryElement = $priceElement->Territory;
                    $territory = new Territory();

                    isset($territoryElement->CountriesExcluded) ? $territory->setCountriesExcluded($territoryElement->CountriesExcluded) : null;
                    isset($territoryElement->CountriesIncluded) ? $territory->setCountriesIncluded($territoryElement->CountriesIncluded) : null;
                    isset($territoryElement->RegionsExcluded) ? $territory->setRegionsExcluded($territoryElement->RegionsExcluded) : null;
                    isset($territoryElement->RegionsIncluded) ? $territory->setRegionsIncluded($territoryElement->RegionsIncluded) : null;

                    $price->setTerritory($territory);
                }

                // Discount
                if (isset($priceElement->DiscountCoded)) {

                    foreach ($priceElement->DiscountCoded as $discountElement) {
                        $discountCoded = new DiscountCoded();
                        $discountCoded->setDiscountCode($discountElement->DiscountCode);
                        $discountCoded->setDiscountCodeType(CodeList100::resolve($discountElement->DiscountCodeType, $this->language));

                        $price->addDiscountCoded($discountCoded);
                    }
                }

                $this->product->getProductSupply()->getSupplyDetail()->addPrice($price);
            }
        }
    }
}
