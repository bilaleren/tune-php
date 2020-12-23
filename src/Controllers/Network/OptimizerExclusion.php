<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/optimizerexclusion/
 * @method object findAllAdvertiserExclusionTagRelations(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllAffiliateExclusionTagRelations(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllOfferExclusionTagRelations(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class OptimizerExclusion extends Controller
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
        return 'OptimizerExclusion';
    }

}