<?php

namespace Nihatavci\PttavmCase;

use Nihatavci\PttavmCase\Business\ProductManager;
use Nihatavci\PttavmCase\Operations\FacebookHandler;
use Nihatavci\PttavmCase\Operations\PlatformHandler;
use Nihatavci\PttavmCase\Repositories\ProductRepository;

class Test
{
    public function __construct()
    {
       echo ProductManager::feed('facebook', 'xmlOperation');
    }
}