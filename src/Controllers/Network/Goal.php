<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/goal/
 * @method object create(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAll(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllByIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object generateTracking(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getPayouts(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getRevenues(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getTierPayouts(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getTierRevenues(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object update(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateField(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class Goal extends Controller
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
        return 'Goal';
    }

}