<?php

namespace Tune\Controllers\Affiliate;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/affiliate/affiliate_admanager/
 * @method object addCreative(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object createCampaign(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllCampaigns(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllCreatives(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findCampaignById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getCampaignCode(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getCampaignCreatives(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateCampaign(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateCreativeField(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class AdManager extends Controller
{

    /**
     * @inheritDoc
     */
    protected function getTarget(): string
    {
        return 'Affiliate_AdManager';
    }

}