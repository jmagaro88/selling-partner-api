<?php

namespace SellingPartnerApi\Seller\MessagingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class LinkObject extends BaseDto
{
    /**
     * @param  string  $href A URI for this object.
     * @param  ?string  $name An identifier for this object.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly string $href,
        public readonly ?string $name = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}