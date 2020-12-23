<?php

namespace Tune\Controllers\Affiliate;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/affiliate/affiliate_offerpixel/
 * @method object create(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAll(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getAllowedTypes(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateField(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class OfferPixel extends Controller
{

    /**
     * @inheritDoc
     */
    protected function getTarget(): string
    {
        return 'Affiliate_OfferPixel';
    }

}