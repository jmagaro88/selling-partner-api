<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\CatalogItemsV20220401\Dto\Pagination;
use SellingPartnerApi\Seller\CatalogItemsV20220401\Dto\Refinements;

final class ItemSearchResults extends BaseResponse
{
    /**
     * @param  int  $numberOfResults For `identifiers`-based searches, the total number of Amazon catalog items found. For `keywords`-based searches, the estimated total number of Amazon catalog items matched by the search query (only results up to the page count limit will be returned per request regardless of the number found).
     *
     * Note: The maximum number of items (ASINs) that can be returned and paged through is 1000.
     * @param  Item[]  $items A list of items from the Amazon catalog.
     * @param  Pagination  $pagination When a request produces a response that exceeds the `pageSize`, pagination occurs. This means the response is divided into individual pages. To retrieve the next page or the previous page, you must pass the `nextToken` value or the `previousToken` value as the `pageToken` parameter in the next request. When you receive the last page, there will be no `nextToken` key in the pagination object.
     * @param  Refinements  $refinements Search refinements.
     */
    public function __construct(
        public readonly int $numberOfResults,
        public readonly array $items,
        public readonly ?Pagination $pagination = null,
        public readonly ?Refinements $refinements = null,
    ) {
    }
}