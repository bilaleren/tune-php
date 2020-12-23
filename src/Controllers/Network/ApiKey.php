<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/apikey/
 * @method object findApiKeys(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object generateApiKey(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getUserApiKey(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object regenerateApiKey(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateApiKeyStatus(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class ApiKey extends Controller
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
        return 'ApiKey';
    }

}