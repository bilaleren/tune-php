<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/custommenulink/
 * @method object create(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object find(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findActive(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object update(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class CustomMenuLink extends Controller
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
        return 'CustomMenuLink';
    }

}