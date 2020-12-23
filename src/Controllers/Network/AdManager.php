<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/admanager/
 * @method object addCreative(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object createCampaign(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllCampaigns(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllCreatives(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findCampaignById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findCreativeById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getActiveNetworkCampaignCount(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getCampaignCode(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getCampaignCreatives(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getUsage(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object setCreativeCustomWeights(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateCampaign(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateCampaignField(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateCreative(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateCreativeField(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class AdManager extends Controller
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
        return 'AdManager';
    }

}