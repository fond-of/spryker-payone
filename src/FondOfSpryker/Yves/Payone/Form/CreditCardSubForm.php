<?php

namespace FondOfSpryker\Yves\Payone\Form;

use SprykerEco\Yves\Payone\Form\CreditCardSubForm as SprykerEcoCreditCardSubForm;
use Symfony\Component\Form\FormBuilderInterface;

class CreditCardSubForm extends SprykerEcoCreditCardSubForm
{
    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $this->addCardType($builder, $options);
    }


}
