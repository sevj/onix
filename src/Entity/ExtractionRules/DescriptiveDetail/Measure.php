<?php

namespace Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail;

use Adimeo\Onix\Entity\CodeList\CodeList48;
use Adimeo\Onix\Entity\CodeList\CodeList50;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Exception\ExtractionException;

class Measure extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (isset($element->Measure)) {
            foreach ($element->Measure as $data) {
                $measure = new \Adimeo\Onix\Entity\Product\Measure();
                $measure->setMeasurement($data->Measurement);
                $measure->setMeasureType(CodeList48::resolve($data->MeasureType));
                $measure->setMeasureUnitCode(CodeList50::resolve($data->MeasureUnitCode));

                $this->product->getDescriptiveDetail()->addMeasure($measure);
            }
        }

    }
}
