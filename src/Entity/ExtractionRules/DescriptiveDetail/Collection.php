<?php

namespace Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail;

use Adimeo\Onix\Entity\CodeList\CodeList148;
use Adimeo\Onix\Entity\CodeList\CodeList149;
use Adimeo\Onix\Entity\CodeList\CodeList15;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Entity\Product\TitleDetail;
use Adimeo\Onix\Entity\Product\TitleElement;

class Collection extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        foreach ($element->Collection as $collectionElement) {
            if (isset($collectionElement->CollectionType)) {
                $collection = new \Adimeo\Onix\Entity\Product\Collection();
                $collection->setCollectionType(CodeList148::resolve($collectionElement->CollectionType, $this->language));

                foreach ($collectionElement->TitleDetail as $title) {
                    $titleDetail = new TitleDetail();
                    $titleDetail->setTitleType(CodeList15::resolve($title->TitleType, $this->language));

                    foreach ($title->TitleElement as $titleElementData) {
                        $titleElement = new TitleElement();
                        $titleElement->setTitleText($titleElementData->TitleText);
                        $titleElement->setTitleElementLevel(CodeList149::resolve($titleElementData->TitleElementLevel, $this->language));
                        isset($titleElementData->Subtitle) ? $titleElement->setSubtitle($titleElementData->Subtitle) : null;
                        isset($titleElementData->SequenceNumber) ? $titleElement->setSequenceNumber($titleElementData->SequenceNumber) : null;
                        isset($titleElementData->TitlePrefix) ? $titleElement->setTitlePrefix($titleElementData->TitlePrefix) : null;
                        isset($titleElementData->TitleWithoutPrefix) ? $titleElement->setTitleWithoutPrefix($titleElementData->TitleWithoutPrefix) : null;
                        isset($titleElementData->PartNumber) ? $titleElement->setPartNumber($titleElementData->PartNumber) : null;

                        $titleDetail->addTitleElement($titleElement);
                    }

                    $collection->addTitleDetail($titleDetail);
                }

                $this->product->getDescriptiveDetail()->addCollection($collection);
            }
        }

    }
}
