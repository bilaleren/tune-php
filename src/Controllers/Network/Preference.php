<?php

namespace Tune\Controllers\Network;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/network/preference/
 * @method object delete(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAll(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findByName(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findPreferenceByNameTypeAndAccountId(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findPreferenceByNameTypeAndUserId(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findPreferencesByTypeAndAccountId(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findPreferencesByTypeAndUserId(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object getValue(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object isEnabled(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object setAccountPreference(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object setUserPreference(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object setValue(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateAllUserPreferences(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object userPreferenceUpdateTermsAndConditions(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class Preference extends Controller
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
        return 'Preference';
    }

}