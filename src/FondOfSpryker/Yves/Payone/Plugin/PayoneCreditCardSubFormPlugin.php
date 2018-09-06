<?php

namespace FondOfSpryker\Yves\Payone\Plugin;

use Spryker\Yves\StepEngine\Dependency\Form\StepEngineFormDataProviderInterface;
use SprykerEco\Yves\Payone\Plugin\PayoneCreditCardSubFormPlugin as SprykerEcoPayoneCreditCardSubFormPlugin;

/**
 * @method \FondOfSpryker\Yves\Payone\PayoneFactory getFactory()
 */
class PayoneCreditCardSubFormPlugin extends SprykerEcoPayoneCreditCardSubFormPlugin
{
    /**
     * @return \FondOfSpryker\Yves\Payone\Form\DataProvider\CreditCardDataProvider|\Spryker\Yves\StepEngine\Dependency\Form\StepEngineFormDataProviderInterface
     */
    public function createSubFormDataProvider(): StepEngineFormDataProviderInterface
    {
        return $this->getFactory()->createCreditCardSubFormDataProvider();
    }
}
