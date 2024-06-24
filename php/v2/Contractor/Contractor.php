<?php

namespace NW\WebService\References\Operations\Notification\Contractor;

use NW\WebService\References\Operations\Notification\Seller;

/**
 * @property Seller $Seller
 */
class Contractor
{
    const TYPE_CUSTOMER = 0;
    private int $type;
    private string $name;

    public function __construct(readonly private int $id)
    {

    }

    /**
     * @param int $resellerId
     * @return static|null
     */
    public static function getById(int $resellerId): ?static
    {
        if(!$resellerId) {
            return null;
        }

        return new static($resellerId); // fakes the getById method
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->name . ' ' . $this->id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
