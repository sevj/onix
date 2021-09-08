<?php

namespace Adimeo\Onix\Exception;

use SimpleXMLElement;
use Throwable;

class ExtractionInvalidException extends \Exception
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