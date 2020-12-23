<?php

namespace Tune\Controllers\Affiliate;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/affiliate/affiliate_report/
 * @method object getAffiliateCommissions(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getAffiliateReferrals(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getConversions(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getStats(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class Report extends Controller
{

    /**
     * @inheritDoc
     */
    protected function getTarget(): string
    {
        return 'Affiliate_Report';
    }

}