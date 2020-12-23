<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/scheduledofferchange/
 * @method object create(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findScheduleById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findSchedules(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object update(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class ScheduledOfferChange extends Controller
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
        return 'ScheduledOfferChange';
    }

}