<?php

namespace Nihatavci\PttavmCase\Repositories;

use Nihatavci\PttavmCase\Configs\Database;
use Nihatavci\PttavmCase\Models\Product;

class ProductRepository
{
    public static function GetAll() : array
    {
        $data = Database::GetAll();
        $products = [];
        foreach ($data as $datum) {
            $products[] = Product::fromArray($datum);
        }

        return $products;
    }
}