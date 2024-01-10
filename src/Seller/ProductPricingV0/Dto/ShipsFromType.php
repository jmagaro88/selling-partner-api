<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShipsFromType extends BaseDto
{
    /**
     * @param  ?string  $state The state from where the item is shipped.
     * @param  ?string  $country The country from where the item is shipped.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?string $state = null,
        public readonly ?string $country = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}