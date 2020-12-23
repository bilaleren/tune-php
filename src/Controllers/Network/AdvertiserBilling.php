<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/advertiserbilling/
 * @method object addInvoiceItem(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object createInvoice(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllInvoices(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllInvoicesByIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findInvoiceById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findInvoiceStats(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getNextStartDate(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeInvoiceItem(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateInvoice(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateInvoiceField(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateTaxInfo(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class AdvertiserBilling extends Controller
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
        return 'AdvertiserBilling';
    }

}