<?php

class Product {

    private $productCode;
    private $productName;
    private $productLine;
    private $productScale;
    private $productVendor;
    private $productDescription;
    private $quantityInStock;
    private $buyPrice;
    private $MSRP;
    
    function __construct() {
        
    }
    
    function getProductCode() {
        return $this->productCode;
    }

    function getProductName() {
        return $this->productName;
    }

    function getProductLine() {
        return $this->productLine;
    }

    function getProductScale() {
        return $this->productScale;
    }

    function getProductVendor() {
        return $this->productVendor;
    }

    function getProductDescription() {
        return $this->productDescription;
    }

    function getQuantityInStock() {
        return $this->quantityInStock;
    }

    function getBuyPrice() {
        return $this->buyPrice;
    }

    function getMSRP() {
        return $this->MSRP;
    }

    function setProductCode($productCode) {
        $this->productCode = $productCode;
    }

    function setProductName($productName) {
        $this->productName = $productName;
    }

    function setProductLine($productLine) {
        $this->productLine = $productLine;
    }

    function setProductScale($productScale) {
        $this->productScale = $productScale;
    }

    function setProductVendor($productVendor) {
        $this->productVendor = $productVendor;
    }

    function setProductDescription($productDescription) {
        $this->productDescription = $productDescription;
    }

    function setQuantityInStock($quantityInStock) {
        $this->quantityInStock = $quantityInStock;
    }

    function setBuyPrice($buyPrice) {
        $this->buyPrice = $buyPrice;
    }

    function setMSRP($MSRP) {
        $this->MSRP = $MSRP;
    }

}
