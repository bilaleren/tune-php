<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/downloadreport/
 * @method object getDownloadReportLink(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class DownloadReport extends Controller
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
        return 'DownloadReport';
    }

}