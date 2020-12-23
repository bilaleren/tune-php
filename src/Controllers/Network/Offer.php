<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/offer/
 * @method object addApprovalQuestion(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object addCategory(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object addGeoTargeting(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object addGroup(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object addTargetBrowser(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object addTargetCountry(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object addTargetCountryRegion(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object blockAffiliate(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object create(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAll(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllAffiliateApprovals(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllByIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllFeaturedOfferIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllIdsByAdvertiserId(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllIdsByAffiliateId(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllOfferAffiliateBlocks(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllOptimizerExcludedOffers(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllPendingAffiliateApprovals(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object generateTrackingLink(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object generateTrackingPixel(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getAffiliateApplicationNote(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getAffiliateApprovalStatus(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getAffiliateHostnames(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getAffiliatePayment(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getAffiliatePayout(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getAffiliateRevenue(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getAllAffiliateAccessByOffer(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getApprovalAnswers(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getApprovalQuestions(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getApprovedAffiliateIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getBlockedAffiliateIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getCategories(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getConversionCaps(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getCustomerList(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getGeoTargeting(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getGroups(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getOfferFiles(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getOfferFilesWithCreativeCode(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getOfferListByGroupId(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getOfferUrls(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getOverview(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getPayoutAndRevenueFactorsForAffiliate(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getPayouts(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getPixels(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getRevenues(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getTargetBrowsers(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getTargetCountries(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getThumbnail(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getTierPayouts(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getTierRevenues(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getUnapprovedAffiliateIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getUnblockedAffiliateIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeAllGeoTargeting(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeCategory(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeConversionCap(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeGeoTargeting(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeGroup(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removePayout(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeRevenue(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeTargetBrowser(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeTargetCountry(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeTargetCountryRegion(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeTierPayout(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeTierRevenue(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object saveApprovalQuestionAnswer(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object setAffiliateApproval(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object setAffiliateHostname(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object setAffiliateTermsDate(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object setCategories(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object setConversionCap(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object setGeoTargeting(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object setGroups(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object setMultipleAffiliateApprovals(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object setPayout(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object setRevenue(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object setTargetBrowsers(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object setTargetCountries(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object setTierPayout(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object setTierRevenue(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object unblockAffiliate(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object update(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateApprovalQuestion(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateByRefId(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateField(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class Offer extends Controller
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
        return 'Offer';
    }

}