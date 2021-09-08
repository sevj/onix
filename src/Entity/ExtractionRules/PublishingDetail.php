<?php

namespace Adimeo\Onix\Entity\ExtractionRules;

use Adimeo\Onix\Entity\ExtractionRules\PublishingDetail\Imprint;
use Adimeo\Onix\Entity\ExtractionRules\PublishingDetail\Publisher;
use Adimeo\Onix\Entity\ExtractionRules\PublishingDetail\PublishingDate;
use Adimeo\Onix\Entity\ExtractionRules\PublishingDetail\PublishingStatus;

class PublishingDetail extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        $toProceed = [
            Imprint::class,
            Publisher::class,
            PublishingStatus::class,
            PublishingDate::class,
        ];

        foreach ($toProceed as $class) {
            (new $class($this->product))->proceed($element);
        }
    }
}
