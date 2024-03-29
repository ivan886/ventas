<?php

namespace App\Controller;
use App\Repositories\ProductsRepository;

class ProductsController {
    public static  function findAll() {
       $repo=new ProductsRepository();
        return $repo->findAll();
    }

    public static function find($productCode) {
        $repo=new ProductsRepository();
        return $repo->find($productCode);
    }

    public static function delete($productCode) {
        $repo=new ProductsRepository();
        $repo->delete($productCode);
    }

   public static function update($product) {
        $repo=new ProductsRepository();
        $repo->update($product);
    }

   public static function insert($product) {
        $repo=new ProductsRepository();
        $repo->update($product);
    }
}

