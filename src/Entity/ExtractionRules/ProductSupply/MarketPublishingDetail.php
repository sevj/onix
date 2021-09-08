<?php

namespace Adimeo\Onix\Entity\ExtractionRules\ProductSupply;

use Adimeo\Onix\Entity\CodeList\CodeList163;
use Adimeo\Onix\Entity\CodeList\CodeList55;
use Adimeo\Onix\Entity\CodeList\CodeList68;
use Adimeo\Onix\Entity\CodeList\CodeList69;
use Adimeo\Onix\Entity\CodeList\CodeList92;
use Adimeo\Onix\Entity\Date;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Entity\Product\AgentIdentifier;
use Adimeo\Onix\Entity\Product\MarketDate;
use Adimeo\Onix\Entity\Product\PublisherRepresentative;

class MarketPublishingDetail extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (isset($element->MarketPublishingDetail)) {
            $marketPublishingDetail = new \Adimeo\Onix\Entity\Product\MarketPublishingDetail();

            if (isset($element->MarketPublishingDetail->MarketDate)) {
                $marketDateElement = $element->MarketPublishingDetail->MarketDate;
                $marketDate = new MarketDate();
                $marketDate->setMarketDateRole(CodeList163::resolve($marketDateElement->MarketDateRole, $this->language));
                $date = new Date();
                $dateFormat = '00';
                if (isset($marketDateElement->DateFormat)) {
                    $dateFormat = $marketDateElement->DateFormat;
                }
                $date->setFormatCode(CodeList55::resolve($dateFormat, $this->language));
                $date->parseDate($marketDateElement->Date);
                $marketDate->setDate($date);

                $marketPublishingDetail->setMarketDate($marketDate);
            }

            $marketPublishingDetail->setMarketPublishingStatus(CodeList68::resolve($element->MarketPublishingDetail->MarketPublishingStatus, $this->language));

            if (isset($element->MarketPublishingDetail->PublisherRepresentative)) {
                foreach ($element->MarketPublishingDetail->PublisherRepresentative as $publisherRepresentativeElement) {
                    $publisherRepresentative = new PublisherRepresentative();
                    $publisherRepresentative->setAgentName($publisherRepresentativeElement->AgentName);
                    $publisherRepresentative->setAgentRole(CodeList69::resolve($publisherRepresentativeElement->AgentRole, $this->language));

                    $identifier = new AgentIdentifier();
                    $identifier->setIDValue($publisherRepresentativeElement->AgentIdentifier->IDValue);
                    $identifier->setAgentIDType(CodeList92::resolve($publisherRepresentativeElement->AgentIdentifier->AgentIDType, $this->language));

                    $publisherRepresentative->setAgentIdentifier($identifier);

                    $marketPublishingDetail->addPublisherRepresentative($publisherRepresentative);
                }
            }

            $this->product->getProductSupply()->setMarketPublishingDetail($marketPublishingDetail);
        }
    }
}
