<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/optimizernetworkpreference/
 * @method object clearPreferenceValue(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object disablePreference(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object enablePreference(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAll(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getValue(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object isEnabled(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object setValue(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class OptimizerNetworkPreference extends Controller
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
        return 'OptimizerNetworkPreference';
    }

}