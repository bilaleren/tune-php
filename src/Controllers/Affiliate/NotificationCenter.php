<?php

namespace Tune\Controllers\Affiliate;

use Closure;
use Tune\Controllers\Controller;
use Tune\Utils\HttpQueryBuilder;

/**
 * @see https://developers.tune.com/affiliate/affiliate_notificationcenter/
 * @method object createEventSubscription(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object deleteEventSubscription(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object deregisterWebhookEndpoint(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllDeliveryMetrics(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllEventSubscriptions(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object findAllWebhookEndpoints(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object registerWebhookEndpoint(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object sendTestWebhookEvent(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 * @method object updateWebhookEndpoint(array|Closure|HttpQueryBuilder $query = null, array $options = [])
 */
class NotificationCenter extends Controller
{

    /**
     * @inheritDoc
     */
    protected function getTarget(): string
    {
        return 'Affiliate_NotificationCenter';
    }

}