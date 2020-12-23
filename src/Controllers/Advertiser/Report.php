<?php

namespace Tune\Controllers\Advertiser;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/advertiser/advertiser_report/
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
        return 'Advertiser_Report';
    }

}