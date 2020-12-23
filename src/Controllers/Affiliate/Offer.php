<?php

namespace Tune\Controllers\Affiliate;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/affiliate/affiliate_offer/
 * @method object acceptOfferTermsAndConditions(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAll(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllFeaturedOfferIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findByCreativeType(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findMyApprovedOffers(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findMyOffers(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object generateTrackingLink(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getApprovalQuestions(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getCategories(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getGeoTargeting(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getPayoutDetails(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getPixels(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getTargetCountries(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getThumbnail(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object requestOfferAccess(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class Offer extends Controller
{

    /**
     * @inheritDoc
     */
    protected function getTarget(): string
    {
        return 'Affiliate_Offer';
    }

}