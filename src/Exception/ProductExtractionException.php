<?php

namespace Jordan\CbdXml\Exception;

use SimpleXMLElement;
use Throwable;

class ProductExtractionException extends \Exception
{
    protected $element;

    public function __construct(SimpleXMLElement $element, $message = "", $code = 0, Throwable $previous = null)
    {
        $this->element = $element;
        parent::__construct($message, $code, $previous);
    }

    public function getElement()
    {
        return $this->element;
    }
}
