<?php

namespace Tune\Controllers\Affiliate;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/affiliate/affiliate_affiliate/
 * @method object findById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getAccountBalance(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getAccountManager(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getPayoneerSignupUrl(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getReferralCommission(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object update(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updatePaymentMethodCheck(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updatePaymentMethodDirectDeposit(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updatePaymentMethodOther(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updatePaymentMethodPayQuicker(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updatePaymentMethodPaypal(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updatePaymentMethodWire(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class Affiliate extends Controller
{

    /**
     * @inheritDoc
     */
    protected function getTarget(): string
    {
        return 'Affiliate_Affiliate';
    }

}