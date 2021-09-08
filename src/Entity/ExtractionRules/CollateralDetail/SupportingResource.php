<?php

namespace Adimeo\Onix\Entity\ExtractionRules\CollateralDetail;

use Adimeo\Onix\Entity\CodeList\CodeList154;
use Adimeo\Onix\Entity\CodeList\CodeList158;
use Adimeo\Onix\Entity\CodeList\CodeList159;
use Adimeo\Onix\Entity\CodeList\CodeList161;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Entity\Product\ResourceVersion;

class SupportingResource extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (!isset($element->SupportingResource)) {
            return;
        }
        foreach ($element->SupportingResource as $resourceElement) {
            $supportingResource = new \Adimeo\Onix\Entity\Product\SupportingResource();
            $supportingResource->setResourceContentType(CodeList158::resolve($resourceElement->ResourceContentType, $this->language));
            $supportingResource->setContentAudience(CodeList154::resolve($resourceElement->ContentAudience, $this->language));
            $supportingResource->setResourceMode(CodeList159::resolve($resourceElement->ResourceMode, $this->language));

            $resourceVersion = new ResourceVersion();
            $resourceVersion->setResourceForm(CodeList161::resolve($resourceElement->ResourceVersion->ResourceForm, $this->language));
            $resourceVersion->setResourceLink($resourceElement->ResourceVersion->ResourceLink);

            $supportingResource->setResourceVersion($resourceVersion);

            $this->product->getCollateralDetail()->addSupportingResource($supportingResource);
        }
    }
}
