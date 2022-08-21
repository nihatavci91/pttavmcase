<?php

namespace Nihatavci\PttavmCase\Operations;

interface HandlerInterface
{
    public static function jsonOperation(array $data);
    public static function xmlOperation(array $data);
}