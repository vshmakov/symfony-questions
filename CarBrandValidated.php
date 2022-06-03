<?php

declare(strict_types=1);

use Symfony\Component\Validator\Constraints as Assert;

class  CarBrandValidated
{
    public const AVAILABLE_BRANDS = [
        'France' => [
            'Peugeot',
            'Citroen',
        ],
        'Germany' => [
            'BMW',
            'Mercedes',
        ],
    ];

    private ?string $country = null;
    private ?string $name = null;

    /**
     * @Assert\True
     */
    public function assertCountryAndNameMatch(): bool
    {
        //...
    }

    //...
}
