<?php

namespace FondOfSpryker\Yves\Payone\Form\DataProvider;

use SprykerEco\Shared\Payone\PayoneApiConstants;
use SprykerEco\Yves\Payone\Form\DataProvider\CreditCardDataProvider as SprykerEcoCreditCardDataProvider;

class CreditCardDataProvider extends SprykerEcoCreditCardDataProvider
{
    /**
     * @return array
     */
    protected function getCardTypes(): array
    {
        return [
            'Visa' => PayoneApiConstants::CREDITCARD_TYPE_VISA,
            'Master Card' => PayoneApiConstants::CREDITCARD_TYPE_MASTERCARD,
        ];
    }
}
