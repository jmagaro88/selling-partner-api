<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\InvoicesV20240619\Dto;

use SellingPartnerApi\Dto;

final class Invoice extends Dto
{
    protected static array $complexArrayTypes = ['transactionIds' => TransactionIdentifier::class];

    /**
     * @param  ?\DateTimeInterface  $date  The date and time the invoice is issued. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     * @param  ?string  $errorCode  If the invoice is in an error state, this attribute displays the error code.
     * @param  ?string  $externalInvoiceId  The invoice identifier that is used by an external party. This is typically the government agency that authorized the invoice.
     * @param  ?string  $govResponse  The response message from the government authority when there is an error during invoice issuance.
     * @param  ?string  $id  The invoice identifier.
     * @param  ?string  $invoiceType  The classification of the invoice type. This varies across marketplaces. Use the `getInvoicesAttributes` operation to check `invoiceType` options.
     * @param  ?string  $series  Use this identifier in conjunction with `externalInvoiceId` to identify invoices from the same seller.
     * @param  ?string  $status  The invoice status classification. Use the `getInvoicesAttributes` operation to check invoice status options.
     * @param  TransactionIdentifier[]|null  $transactionIds  List with identifiers for the transactions associated to the invoice.
     * @param  ?string  $transactionType  Classification of the transaction that originated this invoice. Use the `getInvoicesAttributes` operation to check `transactionType` options.
     */
    public function __construct(
        public readonly ?\DateTimeInterface $date = null,
        public readonly ?string $errorCode = null,
        public readonly ?string $externalInvoiceId = null,
        public readonly ?string $govResponse = null,
        public readonly ?string $id = null,
        public readonly ?string $invoiceType = null,
        public readonly ?string $series = null,
        public readonly ?string $status = null,
        public readonly ?array $transactionIds = null,
        public readonly ?string $transactionType = null,
    ) {}
}