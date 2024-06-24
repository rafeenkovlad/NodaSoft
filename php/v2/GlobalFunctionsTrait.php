<?php

namespace NW\WebService\References\Operations\Notification;

trait GlobalFunctionsTrait
{

    /**
     * @return string
     */
    protected static function getResellerEmailFrom(): string
    {
        return 'contractor@example.com';
    }

    /**
     * @param $resellerId
     * @param $event
     * @return string[]
     */
    protected static function getEmailsByPermit($resellerId, $event): array
    {
        // fakes the method
        return ['someemeil@example.com', 'someemeil2@example.com'];
    }
}
