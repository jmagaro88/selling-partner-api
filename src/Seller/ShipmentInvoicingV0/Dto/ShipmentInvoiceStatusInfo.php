<?php

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShipmentInvoiceStatusInfo extends BaseDto
{
    /**
     * @param  string  $amazonShipmentId The Amazon-defined shipment identifier.
     * @param  string  $invoiceStatus The shipment invoice status.
     */
    public function __construct(
        public readonly string $amazonShipmentId,
        public readonly string $invoiceStatus,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}