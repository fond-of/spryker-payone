<?php

namespace FondOfSpryker\Yves\Payone;

use FondOfSpryker\Yves\Payone\Form\DataProvider\CreditCardDataProvider;
use FondOfSpryker\Yves\Payone\Form\DataProvider\EWalletDataProvider;
use SprykerEco\Yves\Payone\PayoneFactory as SprykerEcoPayoneFactory;

class PayoneFactory extends SprykerEcoPayoneFactory
{
    /**
     * @return \FondOfSpryker\Yves\Payone\Form\DataProvider\CreditCardDataProvider
     */
    public function createCreditCardSubFormDataProvider(): CreditCardDataProvider
    {
        return new CreditCardDataProvider();
    }

    /**
     * @return \FondOfSpryker\Yves\Payone\Form\DataProvider\EWalletDataProvider
     */
    public function createEWalletSubFormDataProvider(): EWalletDataProvider
    {
        return new EWalletDataProvider();
    }
}
