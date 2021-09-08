<?php

namespace Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail;

use Adimeo\Onix\Entity\CodeList\CodeList17;
use Adimeo\Onix\Entity\CodeList\CodeList44;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Entity\Product\NameIdentifier;

class Contributor extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (isset($element->Contributor)) {
            foreach ($element->Contributor as $contributorElement) {
                $contributor = new \Adimeo\Onix\Entity\Product\Contributor();
                isset($contributorElement->SequenceNumber) ? $contributor->setSequenceNumber($contributorElement->SequenceNumber) : null;
                isset($contributorElement->ContributorRole) ?
                    $contributor->setContributorRole(CodeList17::resolve($contributorElement->ContributorRole, $this->language)) : null;

                if (isset($contributorElement->NameIdentifier)) {
                    $nameIdentifier = new NameIdentifier();
                    $nameIdentifier->setIDValue($contributorElement->NameIdentifier->IDValue);
                    $nameIdentifier->setIDTypeName($contributorElement->NameIdentifier->IDTypeName);
                    $nameIdentifier->setNameIDType(CodeList44::resolve($contributorElement->NameIdentifier->NameIDType, $this->language));

                    $contributor->setNameIdentifier($nameIdentifier);
                }

                isset($contributorElement->NamesBeforeKey) ? $contributor->setNamesBeforeKey($contributorElement->NamesBeforeKey) : null;
                isset($contributorElement->KeyNames) ? $contributor->setKeyNames($contributorElement->KeyNames) : null;
                isset($contributorElement->BiographicalNote) ? $contributor->setBiographicalNote($contributorElement->BiographicalNote) : null;

                $this->product->getDescriptiveDetail()->addContributor($contributor);
            }
        }
    }
}
