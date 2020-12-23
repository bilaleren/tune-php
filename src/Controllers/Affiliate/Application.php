<?php

namespace Tune\Controllers\Affiliate;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/affiliate/affiliate_application/
 * @method object findAllCountries(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllHostnames(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllOfferCategories(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllTimezones(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class Application extends Controller
{

    /**
     * @inheritDoc
     */
    protected function getTarget(): string
    {
        return 'Affiliate_Application';
    }

}