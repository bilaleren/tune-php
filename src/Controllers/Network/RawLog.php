<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/rawlog/
 * @method object getDownloadLink(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getLogExpirations(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object listDateDirs(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object listLogs(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class RawLog extends Controller
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
        return 'RawLog';
    }

}