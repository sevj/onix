<?php

namespace Adimeo\Onix\Entity\ExtractionRules;

use Adimeo\Onix\Entity\ExtractionRules\Product\Barcode;
use Adimeo\Onix\Entity\ExtractionRules\Product\NotificationType;
use Adimeo\Onix\Entity\ExtractionRules\Product\RecordReference;

class Product extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        // RecordReference
        (new RecordReference($this->product))->proceed($element);

        // NotificationType
        (new NotificationType($this->product))->proceed($element);

        // Barcode
        (new Barcode($this->product))->proceed($element);

        // Identifier
        (new ProductIdentifier($this->product))->proceed($element);

        // Descriptive Detail
        $this->product->setDescriptiveDetail(new \Adimeo\Onix\Entity\Product\DescriptiveDetail());
        (new DescriptiveDetail($this->product))->proceed($element->DescriptiveDetail);

        $this->product->setCollateralDetail(new \Adimeo\Onix\Entity\Product\CollateralDetail());
        (new CollateralDetail($this->product))->proceed($element->CollateralDetail);

        $this->product->setPublishingDetail(new \Adimeo\Onix\Entity\Product\PublishingDetail());
        (new PublishingDetail($this->product))->proceed($element->PublishingDetail);

        $this->product->setRelatedMaterial(new \Adimeo\Onix\Entity\Product\RelatedMaterial());
        (new RelatedMaterial($this->product))->proceed($element->RelatedMaterial);

        $this->product->setProductSupply(new \Adimeo\Onix\Entity\Product\ProductSupply());
        (new ProductSupply($this->product))->proceed($element->ProductSupply);
    }
}
