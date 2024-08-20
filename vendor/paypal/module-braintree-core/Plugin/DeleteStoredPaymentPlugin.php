<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace PayPal\Braintree\Plugin;

use Exception;
use PayPal\Braintree\Model\Adapter\BraintreeAdapter;
use Magento\Vault\Api\Data\PaymentTokenInterface;
use Magento\Vault\Api\PaymentTokenRepositoryInterface;
use Psr\Log\LoggerInterface;

class DeleteStoredPaymentPlugin
{
    private const BT_PAYMENT_METHOD_CODES = [
        'braintree',
        'braintree_paypal',
        'braintree_applepay',
        'braintree_googlepay',
        'braintree_venmo',
        'braintree_ach_direct_debit'
    ];
    /**
     * @var BraintreeAdapter
     */
    private BraintreeAdapter $braintreeAdapter;

    /**
     * @var LoggerInterface
     */
    private LoggerInterface $logger;
}