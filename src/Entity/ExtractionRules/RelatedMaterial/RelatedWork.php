<?php

namespace Adimeo\Onix\Entity\ExtractionRules\RelatedMaterial;

use Adimeo\Onix\Entity\CodeList\CodeList16;
use Adimeo\Onix\Entity\CodeList\CodeList164;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Entity\Product\WorkIdentifier;

class RelatedWork extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (isset($element->RelatedWork)) {
            foreach ($element->RelatedWork as $workElement) {
                $relatedWork = new \Adimeo\Onix\Entity\Product\RelatedWork();
                $relatedWork->setWorkRelationCode(CodeList164::resolve($workElement->WorkRelationCode, $this->language));

                foreach ($workElement->WorkIdentifier as $identifierElement) {
                    $workIdentifier = new WorkIdentifier();
                    $workIdentifier->setIDValue($identifierElement->IDValue);
                    $workIdentifier->setWorkIDType(CodeList16::resolve($identifierElement->WorkIDType, $this->language));

                    $relatedWork->setWorkIdentifier($workIdentifier);
                }

                $this->product->getRelatedMaterial()->addRelatedWork($relatedWork);
            }
        }
    }
}
