<?php

namespace Adimeo\Onix\Entity\ExtractionRules;

interface ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void;
}
