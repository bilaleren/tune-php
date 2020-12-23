<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/tinyurl/
 * @method object findAll(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateRedirect(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class TinyUrl extends Controller
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
        return 'TinyUrl';
    }

}