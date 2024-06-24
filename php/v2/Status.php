<?php

namespace NW\WebService\References\Operations\Notification;

class Status
{
    private static array $names = [
            0 => 'Completed',
            1 => 'Pending',
            2 => 'Rejected',
        ];

    public static function getName(int $id): string
    {
        return Status::$names[$id];
    }
}