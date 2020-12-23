<?php

namespace Tune\Controllers\Affiliate;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/affiliate/affiliate_affiliateuser/
 * @method object create(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAll(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getContext(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object setPermissions(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object update(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class AffiliateUser extends Controller
{

    /**
     * @inheritDoc
     */
    protected function getTarget(): string
    {
        return 'Affiliate_AffiliateUser';
    }

}