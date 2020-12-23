<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/tag/
 * @method object addToAdvertiser(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object addToAffiliate(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object addToOffer(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object create(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object delete(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAll(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllAdvertiserTagRelations(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllAffiliateTagRelations(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllOfferTagRelations(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllOptimizerTags(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeFromAdvertiser(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeFromAdvertiserByRelationalId(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeFromAffiliate(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeFromAffiliateByRelationalId(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeFromOffer(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeFromOfferByRelationalId(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object setForAdvertiser(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object setForAffiliate(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object setForOffer(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object update(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class Tag extends Controller
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
        return 'Tag';
    }

}