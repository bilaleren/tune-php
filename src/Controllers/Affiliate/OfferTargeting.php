<?php

namespace Tune\Controllers\Affiliate;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/affiliate/affiliate_offertargeting/
 * @method object getRuleTargetingForOffer(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class OfferTargeting extends Controller
{

    /**
     * @inheritDoc
     */
    protected function getTarget(): string
    {
        return 'Affiliate_OfferTargeting';
    }

}