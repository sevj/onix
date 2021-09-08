<?php

namespace Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail;

use Adimeo\Onix\Entity\CodeList\CodeList22;
use Adimeo\Onix\Entity\CodeList\CodeList74;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Exception\ExtractionException;

class Language extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (isset($element->Language)) {
            foreach ($element->Language as $data) {
                $language = new \Adimeo\Onix\Entity\Product\Language();
                $language->setLanguageCode(CodeList74::resolve($data->LanguageCode, $this->language));
                $language->setLanguageRole(CodeList22::resolve($data->LanguageRole, $this->language));

                $this->product->getDescriptiveDetail()->addLanguage($language);
            }
        }

    }
}
