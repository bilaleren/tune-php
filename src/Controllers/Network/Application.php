<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/application/
 * @method object addAffiliateTier(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object addHostname(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object addOfferCategory(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object addOfferGroup(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object changeAdvertiserApiKey(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object changeAffiliateApiKey(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object changeNetworkApiKey(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object createAdvertiserApiKey(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object createAffiliateApiKey(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object decryptUnsubHash(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAdvertiserApiKey(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAdvertiserApiKeyByAdvertiserId(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAffiliateApiKey(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAffiliateApiKeyByAffiliateId(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllAdvertiserApiKeys(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllAffiliateApiKeys(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllAffiliateTierAffiliateIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllAffiliateTiers(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllBrowsers(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllCountries(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllHostnames(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllOfferCategories(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllOfferCategoryOfferIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllOfferGroupOfferIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllOfferGroups(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllPermissions(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllRegions(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllTimezones(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findBrowserById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findCities(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findCountryByCode(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findPermissionById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findPermissionByName(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findPermissionsByGroup(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findTimezoneById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findUserAuthIps(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object generateAllUnsubLinks(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object generateUnsubLink(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getAccountInformation(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getActiveOfferCategoryCount(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getBrand(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getBrandInformation(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getCountryRegions(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getPoFile(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getTimezone(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object resetPassword(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateAccountInformation(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateAdvertiserApiKey(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateAffiliateApiKey(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateAffiliateTier(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateBrandEmail(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateBrandHostname(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateBrandJumpHostname(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateBrandJumpHostnameHasSsl(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateBrandNetworkName(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateHostname(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateOfferCategory(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateOfferGroup(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object uploadPoFile(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object validAdvertiserApiKey(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object validAffiliateApiKey(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object whitelistNetworkApiIp(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class Application extends Controller
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
        return 'Application';
    }

}