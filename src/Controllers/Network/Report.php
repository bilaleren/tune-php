<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/report/
 * @method object getActiveCurrencies(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getAffiliateCommissions(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getConversions(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getManagerCommissions(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getModSummaryLogs(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getReferrals(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getStats(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getSubscriptions(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class Report extends Controller
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
        return 'Report';
    }

}