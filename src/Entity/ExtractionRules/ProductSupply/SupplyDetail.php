<?php

namespace Adimeo\Onix\Entity\ExtractionRules\ProductSupply;

use Adimeo\Onix\Entity\CodeList\CodeList166;
use Adimeo\Onix\Entity\CodeList\CodeList53;
use Adimeo\Onix\Entity\CodeList\CodeList55;
use Adimeo\Onix\Entity\CodeList\CodeList65;
use Adimeo\Onix\Entity\CodeList\CodeList92;
use Adimeo\Onix\Entity\CodeList\CodeList93;
use Adimeo\Onix\Entity\Date;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Entity\Product\ReturnsConditions;
use Adimeo\Onix\Entity\Product\Supplier;
use Adimeo\Onix\Entity\Product\SupplierIdentifier;
use Adimeo\Onix\Entity\Product\SupplyDate;

class SupplyDetail extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (isset($element->SupplyDetail)) {
            $supplyDetail = new \Adimeo\Onix\Entity\Product\SupplyDetail();

            if (isset($element->SupplyDetail->Supplier)) {
                $supplierElement = $element->SupplyDetail->Supplier;

                $supplier = new Supplier();
                $supplier->setSupplierName($supplierElement->SupplierName);
                $supplier->setSupplierRole(CodeList93::resolve($supplierElement->SupplierRole, $this->language));
                $supplier->setTelephoneNumber($supplierElement->TelephoneNumber);

                foreach ($supplierElement->SupplierIdentifier as $supplierIdentifierElement) {
                    $identifier = new SupplierIdentifier();
                    $identifier->setIDValue($supplierIdentifierElement->IDValue);
                    $identifier->setSupplierIDType(CodeList92::resolve($supplierIdentifierElement->SupplierIDType, $this->language));
                    $supplier->addSupplierIdentifier($identifier);
                }

                $supplyDetail->setSupplier($supplier);
            }

            if (isset($element->SupplyDetail->ReturnsConditions)) {
                $returnsConditionsElement = $element->SupplyDetail->ReturnsConditions;
                $returnsConditions = new ReturnsConditions();
                $returnsConditions->setReturnsCode($returnsConditionsElement->ReturnsCode);
                $returnsConditions->setReturnsCodeType(CodeList53::resolve($returnsConditionsElement->ReturnsCodeType, $this->language));

                $supplyDetail->setReturnsConditions($returnsConditions);
            }

            if (isset($element->SupplyDetail->ProductAvailability)) {
                $supplyDetail->setProductAvailability(CodeList65::resolve($element->SupplyDetail->ProductAvailability, $this->language));
            }

            if (isset($element->SupplyDetail->SupplyDate)) {
                $supplyDateElement = $element->SupplyDetail->SupplyDate;

                $supplyDate = new SupplyDate();
                $supplyDate->setSupplyDateRole(CodeList166::resolve($supplyDateElement->SupplyDateRole, $this->language));
                $date = new Date();
                $dateFormat = '00';
                if (isset($supplyDateElement->DateFormat)) {
                    $dateFormat = $supplyDateElement->DateFormat;
                }
                $date->setFormatCode(CodeList55::resolve($dateFormat, $this->language));
                $date->parseDate($supplyDateElement->Date);
                $supplyDate->setDate($date);

                $supplyDetail->addSupplyDate($supplyDate);
            }

            $this->product->getProductSupply()->setSupplyDetail($supplyDetail);

            // Price
            (new Price($this->product))->proceed($element->SupplyDetail);
        }
    }
}
