<?php

namespace NW\WebService\References\Operations\Notification;

abstract class ReferencesOperation
{
    use GlobalFunctionsTrait;

    /**
     * @return array
     */
    abstract public function doOperation(): array;


    /**
     * @param $pName
     * @return array
     */
    public function getRequest($pName): array
    {
        return $_REQUEST[$pName];
    }
}