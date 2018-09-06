<?php

namespace FondOfSpryker\Yves\Payone\Form\DataProvider;

use SprykerEco\Shared\Payone\PayoneApiConstants;
use SprykerEco\Yves\Payone\Form\DataProvider\EWalletDataProvider as SprykerEcoEWalletDataProvider;

class EWalletDataProvider extends SprykerEcoEWalletDataProvider
{
    /**
     * @return array
     */
    protected function getEWalletTypes(): array
    {
        return [
            'PayPal' => PayoneApiConstants::E_WALLET_TYPE_PAYPAL,
        ];
    }
}
