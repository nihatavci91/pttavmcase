<?php

namespace Nihatavci\PttavmCase\Business;

use Nihatavci\PttavmCase\Operations\PlatformHandler;
use Nihatavci\PttavmCase\Repositories\ProductRepository;

class ProductManager
{
    public static function feed($platform, $operation)
    {
        $products = ProductRepository::GetAll();

        return PlatformHandler::handle($platform, $operation, $products);
    }
}