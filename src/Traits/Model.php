<?php

namespace Nihatavci\PttavmCase\Traits;

trait Model
{
    public static function fromArray(array $data = []): self
    {
        $obj = new self;

        foreach ($data as $key => $value){
            $obj->{$key} = $value;
        }

        return $obj;
    }
}