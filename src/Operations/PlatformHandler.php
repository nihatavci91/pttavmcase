<?php

namespace Nihatavci\PttavmCase\Operations;

class PlatformHandler
{
    const PLATFORMS = [
        'google' => GoogleHandler::class,
        'facebook' => FacebookHandler::class
    ];

    public static function handle(string $platform, string $operation, array $data)
    {
        if (!array_key_exists($platform,self::PLATFORMS)){
            return 'yazilan platformlar hatali';
        }

        $class = self::PLATFORMS[$platform];

        return $class::{$operation}($data);
    }
}