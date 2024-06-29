<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\TransfersV20240601\Dto;

use SellingPartnerApi\Dto;

final class ExpiryDate extends Dto
{
    /**
     * @param  ?string  $month  A string with digits
     * @param  ?string  $year  A string with digits
     */
    public function __construct(
        public readonly ?string $month = null,
        public readonly ?string $year = null,
    ) {}
}
