<?php

namespace Adimeo\Onix\Entity\ExtractionRules\PublishingDetail;

use Adimeo\Onix\Entity\CodeList\CodeList45;
use Adimeo\Onix\Entity\CodeList\CodeList73;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Entity\Product\Website;

class Publisher extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (isset($element->Publisher)) {
            $publisher = new \Adimeo\Onix\Entity\Product\Publisher();
            $publisher->setPublisherName($element->Publisher->PublisherName);
            $publisher->setPublishingRole(CodeList45::resolve($element->Publisher->PublishingRole, $this->language));

            if (isset($element->Publisher->Website)) {
                $website = new Website();
                $website->setWebsiteLink($element->Publisher->Website->WebsiteLink);
                $website->setWebsiteRole(CodeList73::resolve($element->Publisher->Website->WebsiteRole, $this->language));
                $publisher->setWebsite($website);
            }

            $this->product->getPublishingDetail()->setPublisher($publisher);
        }
    }
}
