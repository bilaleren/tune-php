<?php

namespace Tune\Controllers\Affiliate;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/affiliate/affiliate_userpreferences/
 * @method object setValue(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class UserPreferences extends Controller
{

    /**
     * @inheritDoc
     */
    protected function getTarget(): string
    {
        return 'Affiliate_UserPreferences';
    }

}