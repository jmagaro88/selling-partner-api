<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PartyIdentification extends BaseDto
{
	protected static array $complexArrayTypes = ['taxRegistrationDetails' => [TaxRegistrationDetails::class]];


	/**
	 * @param string $partyId Assigned identification for the party.
	 * @param ?Address $address Address of the party.
	 * @param TaxRegistrationDetails[] $taxRegistrationDetails Tax registration details of the entity.
	 * @param ?mixed $additionalProperties
	 */
	public function __construct(
		public readonly string $partyId,
		public readonly ?Address $address = null,
		public readonly ?array $taxRegistrationDetails = null,
		mixed ...$additionalProperties,
	) {
		parent::__construct(...$additionalProperties);
	}
}