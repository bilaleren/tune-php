<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/affiliate/
 * @method object addAccountNote(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object adjustAffiliateClicks(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object block(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object create(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object createSignupQuestion(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object createSignupQuestionAnswer(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object disableFraudAlert(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object enableFraudAlert(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAll(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllByIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllFraudAlerts(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllIdsByAccountManagerId(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllOptimizerExcludedAffiliates(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllPendingUnassignedAffiliateIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllPendingUnassignedAffiliates(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findList(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getAccountManager(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getAccountNotes(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getAffiliateTier(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getApprovedOfferIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getBlockedOfferIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getBlockedReasons(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getCreatorUser(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getOfferConversionCaps(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getOfferHostnames(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getOfferPayouts(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getOfferPayoutsAll(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getOfferPixels(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getOwnersAffiliateAccountId(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getPaymentMethods(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getReferralAffiliateIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getReferralCommission(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getReferringAffiliate(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getSignupAnswers(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getSignupQuestions(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getUnapprovedOfferIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getUnblockedOfferIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeCustomReferralCommission(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object setCustomReferralCommission(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object signup(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object simpleSearch(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object update(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateAccountNote(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateByRefId(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateField(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updatePaymentMethodCheck(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updatePaymentMethodDirectDeposit(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updatePaymentMethodOther(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updatePaymentMethodPayQuicker(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updatePaymentMethodPayoneer(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updatePaymentMethodPaypal(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updatePaymentMethodWire(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateSignupQuestion(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateSignupQuestionAnswer(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class Affiliate extends Controller
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
        return 'Affiliate';
    }

}