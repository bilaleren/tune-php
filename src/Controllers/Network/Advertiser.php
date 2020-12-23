<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/advertiser/
 * @method object addAccountNote(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object block(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object blockAffiliate(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object create(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object createSignupQuestion(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object createSignupQuestionAnswer(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAll(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllByIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllIdsByAccountManagerId(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllOptimizerExcludedAdvertisers(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllPendingUnassignedAdvertiserIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllPendingUnassignedAdvertisers(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getAccountBalance(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getAccountManager(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getAccountNotes(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getBlockedAffiliateIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getBlockedReasons(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getCreatorUser(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getOverview(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getOwnersAdvertiserAccountId(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getSignupAnswers(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getSignupQuestions(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getUnblockedAffiliateIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object signup(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object unblockAffiliate(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object update(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateAccountNote(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateField(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateSignupQuestion(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateSignupQuestionAnswer(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class Advertiser extends Controller
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
        return 'Advertiser';
    }

}