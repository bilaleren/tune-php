<?php

namespace Tune\Controllers\Affiliate;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/affiliate/affiliate_notification/
 * @method object clearUserSubscriptions(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getUserSubscriptions(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object replaceUserSubscriptions(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class Notification extends Controller
{

    /**
     * @inheritDoc
     */
    protected function getTarget(): string
    {
        return 'Affiliate_Notification';
    }

}