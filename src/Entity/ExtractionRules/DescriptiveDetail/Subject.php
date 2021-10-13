<?php

namespace Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail;

use Adimeo\Onix\Entity\CodeList\CodeList148;
use Adimeo\Onix\Entity\CodeList\CodeList149;
use Adimeo\Onix\Entity\CodeList\CodeList15;
use Adimeo\Onix\Entity\CodeList\CodeList27;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Entity\Product\TitleDetail;
use Adimeo\Onix\Entity\Product\TitleElement;

class Subject extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (!isset($element->Subject)) {
            return;
        }
        foreach ($element->Subject as $subjectElement) {
            $subject = new \Adimeo\Onix\Entity\Product\Subject();
            $subject->setMainSubject(isset($subjectElement->MainSubject));
            $subject->setSubjectCode($subjectElement->SubjectCode);
            $subject->setSubjectHeadingText($subjectElement->SubjectHeadingText);
            $subject->setSubjectSchemeIdentifier(CodeList27::resolve($subjectElement->SubjectSchemeIdentifier, $this->language));
            $subject->setSubjectSchemeVersion($subjectElement->SubjectSchemeVersion);

            $this->product->getDescriptiveDetail()->addSubject($subject);
        }

    }
}
