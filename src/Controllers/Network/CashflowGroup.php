<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/cashflowgroup/
 * @method object createCashflowGroup(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findCashflowGroupById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findCashflowGroupUsage(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findCashflowGroups(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getCashflowRuleFieldDefinitions(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getGoalPayoutGroupsForGoal(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getGoalRevenueGroupsForGoal(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getOfferPayoutGroupsForOffer(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getOfferRevenueGroupsForOffer(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object replaceGoalPayoutGroupsForGoal(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object replaceGoalRevenueGroupsForGoal(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object replaceOfferPayoutGroupsForOffer(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object replaceOfferRevenueGroupsForOffer(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateCashflowGroup(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class CashflowGroup extends Controller
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
        return 'CashflowGroup';
    }

}