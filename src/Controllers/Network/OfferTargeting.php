<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/offertargeting/
 * @method object addTargetRuleToOffer(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object createTargetRule(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object deleteTargetRule(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findTargetRules(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getActiveOfferIdsUsingRule(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getActiveUsesOfRule(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getRuleTargetingForOffer(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeTargetRuleFromOffer(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateTargetRule(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateTargetRuleOfferAction(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class OfferTargeting extends Controller
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
        return 'OfferTargeting';
    }

}