<?php

namespace Tune\Controllers\Affiliate;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/affiliate/affiliate_affiliatebilling/
 * @method object findAllInvoices(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllReceipts(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findInvoiceById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findReceiptById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getAccountBalance(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getPayoutTotals(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateTaxId(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class AffiliateBilling extends Controller
{

    /**
     * @inheritDoc
     */
    protected function getTarget(): string
    {
        return 'Affiliate_AffiliateBilling';
    }

}