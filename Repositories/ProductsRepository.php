<?php

require_once '../config/Connection.php';
require_once '../models/Products.php';

class ProductsRepository {

    public function findAll() {
        $sql = "select productCode,
                    productName,
                    productLine,
                    productScale,
                    productVendor,
                    productDescription,
                    quantityInStock,
                    buyPrice,
                    MSRP 
                from products 
                ";
        $conn = Connection::getConnection();
        $resource = $conn->prepare($sql);
        $resource->execute();
        $rows = $resource->fetchAll(PDO::FETCH_OBJ);
        return $rows;
    }

    public function find($productCode) {
        $sql = 'select  productCode,
                    productName,
                    productLine,
                    productScale,
                    productVendor,
                    productDescription,
                    quantityInStock,
                    buyPrice,
                    MSRP
                    FROM products WHERE productCode=:productCode';
        $conn = Connection::getConnection();
        $resource = $conn->prepare($sql);
        $resource->bindParam(':productCode', $productCode);
        $resource->execute();
        return $resource->fetchAll(PDO::FETCH_OBJ);
    }

    public function delete($productCode) {
        $sql = 'DELETE FROM products WHERE productCode=:productCode';
        $conn = Connection::getConnection();
        $resource = $conn->prepare($sql);
        $resource->bindParam(':productCode', $productCode);
        $resource->execute();
    }

    public function update($product) {
        $sql = " update products
                  set 
                    productName=:productName,
                    productLine=:productLine,
                    productScale=:productScale,
                    productVendor=:productVendor,
                    productDescription=:productDescription,
                    quantityInStock=:quantityInStock,
                    buyPrice=:buyPrice,
                    MSRP=:MSRP
                    where productCode=:productCode 
                 ";
        $conn = Connection::getConnection();
        $resource = $conn->prepare($sql);
        $resource->bindParam(':productCode', $product->getProductCode());
        $resource->bindParam(':productName', $product->getProductName());
        $resource->bindParam(':productLine', $product->getProductLine());
        $resource->bindParam(':productScale', $product->getProductScale());
        $resource->bindParam(':productVendor', $product->getProductVendor());
        $resource->bindParam(':productDescription', $product->getProductDescription());
        $resource->bindParam(':quantityInStock', $product->getQuantityInStock());
        $resource->bindParam(':buyPrice', $product->getBuyPrice());
        $resource->bindParam(':MSRP', $product->getMSRP());
        $resource->execute();
    }

    public function insert($product) {
        $sql = " insert into products
                 (productCode,
                    productName,
                    productLine,
                    productScale,
                    productVendor,
                    productDescription,
                    quantityInStock,
                    buyPrice,
                    MSRP)
                 values
                 (  :productCode,
                    :productName,
                    :productLine,
                    :productScale,
                    :productVendor,
                    :productDescription,
                    :quantityInStock,
                    :buyPrice,
                    :MSRP)
                 ";
        $conn = Connection::getConnection();
        $resource = $conn->prepare($sql);
        $resource->bindParam(':productCode', $product->getProductCode());
        $resource->bindParam(':productName', $product->getProductName());
        $resource->bindParam(':productLine', $product->getProductLine());
        $resource->bindParam(':productScale', $product->getProductScale());
        $resource->bindParam(':productVendor', $product->getProductVendor());
        $resource->bindParam(':productDescription', $product->getProductDescription());
        $resource->bindParam(':quantityInStock', $product->getQuantityInStock());
        $resource->bindParam(':buyPrice', $product->getBuyPrice());
        $resource->bindParam(':MSRP', $product->getMSRP());
        $resource->execute();
    }

}
