<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/advertiseruser/
 * @method object checkPassword(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object create(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAll(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllByIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllIdsByAdvertiserId(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object grantAccess(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeAccess(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object resetPassword(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object uniqueEmail(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object update(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateField(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class AdvertiserUser extends Controller
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
        return 'AdvertiserUser';
    }

}