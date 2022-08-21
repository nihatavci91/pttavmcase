<?php

namespace Nihatavci\PttavmCase\Models;

use Nihatavci\PttavmCase\Traits\Model;

class Product
{
    use Model;

    public int $id;
    public string $name;
    public float $price;
    public string $category;
}