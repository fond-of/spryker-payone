<?php

namespace FondOfSpryker\Zed\Payone\Business\Order;

use Generated\Shared\Transfer\PayonePaymentTransfer;
use Orm\Zed\Payone\Persistence\SpyPaymentPayone;
use SprykerEco\Zed\Payone\Business\Order\OrderManager as SprykerEcoOrderManager;
use SprykerEco\Zed\Payone\PayoneConfig;

class OrderManager extends SprykerEcoOrderManager
{

    /**
     * @var \SprykerEco\Zed\Payone\PayoneConfig
     */
    private $config;

    /**
     * @param \SprykerEco\Zed\Payone\PayoneConfig $config
     */
    public function __construct(PayoneConfig $config)
    {
        $this->config = $config;
    }

    /**
     * @param \Generated\Shared\Transfer\PayonePaymentTransfer $paymentTransfer
     *
     * @return \Orm\Zed\Payone\Persistence\SpyPaymentPayone
     */
    protected function savePayment(PayonePaymentTransfer $paymentTransfer)
    {
        $payment = new SpyPaymentPayone();
        $payment->fromArray(($paymentTransfer->toArray()));

        $orderEntity = $payment->getSpySalesOrder();
        $payment->setReference(
            $this->config->generatePayoneReference($paymentTransfer, $orderEntity)
        );

        $payment->save();

        return $payment;
    }


}
