<?php

namespace Adimeo\Onix\Entity;

class Product
{
    protected string $identifierInternal;
    protected string $identifierGTIN;
    protected string $identifierISBN;
    protected string $internalOrigin;

    protected string $barcode;
    protected string $barcodePosition;

    protected string $productComposition;

    protected string $productForm;

    /**
     * @return string
     */
    public function getIdentifierInternal(): string
    {
        return $this->identifierInternal;
    }

    /**
     * @param string $identifierInternal
     * @return Product
     */
    public function setIdentifierInternal(string $identifierInternal): Product
    {
        $this->identifierInternal = $identifierInternal;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdentifierGTIN(): string
    {
        return $this->identifierGTIN;
    }

    /**
     * @param string $identifierGTIN
     * @return Product
     */
    public function setIdentifierGTIN(string $identifierGTIN): Product
    {
        $this->identifierGTIN = $identifierGTIN;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdentifierISBN(): string
    {
        return $this->identifierISBN;
    }

    /**
     * @param string $identifierISBN
     * @return Product
     */
    public function setIdentifierISBN(string $identifierISBN): Product
    {
        $this->identifierISBN = $identifierISBN;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalOrigin(): string
    {
        return $this->internalOrigin;
    }

    /**
     * @param string $internalOrigin
     * @return Product
     */
    public function setInternalOrigin(string $internalOrigin): Product
    {
        $this->internalOrigin = $internalOrigin;
        return $this;
    }

    /**
     * @return string
     */
    public function getBarcode(): string
    {
        return $this->barcode;
    }

    /**
     * @param string $barcode
     * @return Product
     */
    public function setBarcode(string $barcode): Product
    {
        $this->barcode = $barcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getBarcodePosition(): string
    {
        return $this->barcodePosition;
    }

    /**
     * @param string $barcodePosition
     * @return Product
     */
    public function setBarcodePosition(string $barcodePosition): Product
    {
        $this->barcodePosition = $barcodePosition;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductComposition(): string
    {
        return $this->productComposition;
    }

    /**
     * @param string $productComposition
     * @return Product
     */
    public function setProductComposition(string $productComposition): Product
    {
        $this->productComposition = $productComposition;
        return $this;
    }
}
