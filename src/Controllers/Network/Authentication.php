<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/authentication/
 * @method object findUserByCredentials(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findUserByToken(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class Authentication extends Controller
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
        return 'Authentication';
    }

}