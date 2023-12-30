<?php

namespace SellingPartnerApi\Seller\OrdersV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\OrdersV0\Dto\Error;

final class GetOrderBuyerInfoResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  OrderBuyerInfo  $payload Buyer information for an order.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?OrderBuyerInfo $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}