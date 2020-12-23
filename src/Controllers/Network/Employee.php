<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/employee/
 * @method object checkPassword(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object create(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAll(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllAdvertiserManagers(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllAffiliateManagers(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllByIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllByPermission(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllIdsByPermission(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findBrandOwnerInformation(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getCommission(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getHOMessage(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object grantAccess(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeAccess(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeCustomCommission(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object resetPassword(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object setCustomCommission(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object uniqueEmail(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object update(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateField(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class Employee extends Controller
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
        return 'Employee';
    }

}