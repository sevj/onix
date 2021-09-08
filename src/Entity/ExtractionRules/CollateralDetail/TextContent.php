<?php

namespace Adimeo\Onix\Entity\ExtractionRules\CollateralDetail;

use Adimeo\Onix\Entity\CodeList\CodeList153;
use Adimeo\Onix\Entity\CodeList\CodeList154;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;

class TextContent extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (!isset($element->TextContent)) {
            return;
        }
        foreach ($element->TextContent as $textElement) {
            $textContent = new \Adimeo\Onix\Entity\Product\TextContent();
            $textContent->setText($textElement->Text);
            $textContent->setContentAudience(CodeList154::resolve($textElement->ContentAudience, $this->language));
            $textContent->setTextType(CodeList153::resolve($textElement->TextType, $this->language));
            $textContent->setSourceTitle($textElement->SourceTitle);

            $this->product->getCollateralDetail()->addTextContent($textContent);
        }

    }
}
