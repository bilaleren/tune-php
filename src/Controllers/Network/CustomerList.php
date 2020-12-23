<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/customerlist/
 * @method object addCustomerAttribute(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object addListAttribute(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object createList(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllCustomers(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllLists(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllListsByIds(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllSubscriptions(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findCustomerById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findListById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findSubscriptionById(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getListAttributes(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeCustomerAttribute(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object removeListAttribute(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateCustomer(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateCustomerAttribute(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateList(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateListAttribute(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateListField(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateSubscription(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class CustomerList extends Controller
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
        return 'CustomerList';
    }

}