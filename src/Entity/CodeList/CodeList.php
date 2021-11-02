<?php

namespace Adimeo\Onix\Entity\CodeList;

class CodeList
{

    /**
     * The code to be resolved
     *
     * @var string
     */
    protected $code = "";

    /**
     * The resolved value
     *
     * @var string
     */
    protected $value = "";

    /**
     * Resolves a CodeList value by code and language
     *
     * @param string $code
     * @param string $language
     * @return CodeList
     */
    public static function resolve(string $code, string $language = 'en')
    {

        $codeList = new static();

        if (!isset($codeList::$$language) || !is_array($codeList::$$language)) {
            throw new \Exception(sprintf('Missing language \'%s\' in %s', $language, static::class));
        }

        if (!array_key_exists($code, $codeList::$$language)) {
            throw new \Exception(sprintf('Missing code %s for language %s in %s', $code, $language, static::class));
        }

        $codeList->code = $code;
        $codeList->value = $codeList::$$language[$code];

        return $codeList;

    }

    public static function getList(string $language = 'fr')
    {
        return static::$$language;
    }

    /**
     * Get Code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Get Value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Convert the CodeList Object to string
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }

}
