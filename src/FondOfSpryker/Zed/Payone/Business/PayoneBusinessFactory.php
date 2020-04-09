<?php

namespace FondOfSpryker\Zed\Payone\Business;

use FondOfSpryker\Zed\Payone\Business\Order\OrderManager;
use SprykerEco\Zed\Payone\Business\Order\OrderManagerInterface;
use SprykerEco\Zed\Payone\Business\PayoneBusinessFactory as SprykerEcoPayoneBusinessFactory;

/**
 * @method \SprykerEco\Zed\Payone\PayoneConfig getConfig()
 */
class PayoneBusinessFactory extends SprykerEcoPayoneBusinessFactory
{
    /**
     * @return \SprykerEco\Zed\Payone\Business\Order\OrderManagerInterface
     */
    public function createOrderManager(): OrderManagerInterface
    {
        return new OrderManager($this->getConfig(), $this->getEntityManager());
    }
}
