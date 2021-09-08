<?php

namespace Adimeo\Onix\Entity\ExtractionRules;

use Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail\Audience;
use Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail\Collection;
use Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail\Contributor;
use Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail\CountryOfManufacture;
use Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail\EditionNumber;
use Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail\Extent;
use Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail\Language;
use Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail\Measure;
use Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail\ProductClassification;
use Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail\ProductComposition;
use Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail\ProductForm;
use Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail\ProductFormDetail;
use Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail\Subject;
use Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail\TitleDetail;

class DescriptiveDetail extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        $toProceed = [
            ProductComposition::class,
            ProductForm::class,
            ProductFormDetail::class,
            Measure::class,
            CountryOfManufacture::class,
            ProductClassification::class,
            Collection::class,
            TitleDetail::class,
            Contributor::class,
            EditionNumber::class,
            Language::class,
            Extent::class,
            Subject::class,
            Audience::class
        ];

        foreach ($toProceed as $class) {
            (new $class($this->product))->proceed($element);
        }
    }
}
