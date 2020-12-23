<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/notification/
 * @method object clearUserSubscriptions(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getUserSubscriptions(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object replaceUserSubscriptions(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class Notification extends Controller
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
        return 'Notification';
    }

}