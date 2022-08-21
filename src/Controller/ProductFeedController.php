<?php

namespace Nihatavci\PttavmCase\Controller;

use Nihatavci\PttavmCase\Business\ProductManager;

class ProductFeedController
{
    public static function feed($params)
    {
        return ProductManager::feed($params['platform'], $params['operation']);
    }
}