<?php

namespace FondOfSpryker\Yves\Payone\Form\DataProvider;

use Generated\Shared\Transfer\PaymentTransfer;
use Generated\Shared\Transfer\PayonePaymentEWalletTransfer;
use Generated\Shared\Transfer\PayonePaymentTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
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

    /**
     * @param \Spryker\Shared\Kernel\Transfer\AbstractTransfer|\Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     *
     * @return \Spryker\Shared\Kernel\Transfer\AbstractTransfer
     */
    public function getData(AbstractTransfer $quoteTransfer)
    {
        if ($quoteTransfer->getPayment() === null) {
            $paymentTransfer = new PaymentTransfer();
            $paymentTransfer->setPayone(new PayonePaymentTransfer());
            $paymentTransfer->setPayoneEWallet(new PayonePaymentEWalletTransfer());
            $quoteTransfer->setPayment($paymentTransfer);
        }

        return $quoteTransfer;
    }
}
