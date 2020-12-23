<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/alert/
 * @method object create(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object createAffiliateUserAlert(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object createEmployeeAlert(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object dismissAffiliateUserAlert(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object dismissAllAffiliateUserAlerts(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object dismissAllEmployeeAlerts(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object dismissEmployeeAlert(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object dismissMultipleEmployeeAlerts(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAll(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllByIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getAffiliateUserAlerts(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getEmployeeAlerts(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object sendToAffiliateUsers(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object sendToEmployees(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object update(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateField(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class Alert extends Controller
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
        return 'Alert';
    }

}