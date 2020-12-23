<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/affiliatebilling/
 * @method object addInvoiceItem(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object createInvoice(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object createReceipt(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllInvoices(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllInvoicesByIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllReceipts(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllReceiptsByIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findInvoiceById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findInvoiceStats(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findLastInvoice(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findLastReceipt(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findReceiptById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object generateInvoices(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getAccountBalance(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getAccountHistory(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getNextStartDate(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getOutstandingInvoices(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getPayoutTotals(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeInvoiceItem(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateInvoice(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateInvoiceField(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateReceipt(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateReceiptField(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateTaxInfo(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class AffiliateBilling extends Controller
{

    /**
     * @var string
     */
    protected $apiKeyParamName = 'NetworkToken';

    /**
     * @inheritDoc
     */
    protected function getTarget(): string
    {
        return 'AffiliateBilling';
    }

}