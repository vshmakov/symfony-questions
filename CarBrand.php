<?php

declare(strict_types=1);

class  CarBrand
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

    //...
}
