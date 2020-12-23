# TUNE APIs

TUNE makes the industry’s most flexible SaaS platform for managing marketing partnerships across mobile and web. On one platform, you can maximize ROI from onboarding through payout with your most important partners — affiliates, networks, influencers, agencies, and any other business development relationships.

## Installation

```
composer require bilaleren/tune-api
```

## Setup

```php
use Tune\Networks;
use Tune\AffiliateApi;
use Tune\Utils\BlankNetwork;
use Tune\Repository\NetworkRepository;

$networks = new Networks([
    new BlankNetwork('api_key_1', 'network_id_1'), // Auto selected network
    new BlankNetwork('api_key_2', 'network_id_2')
]);

class CustomNetwork implements NetworkRepository 
{

    /**
     * @inheritDoc
     */
    public function name(): string
    {
        return $this->networkId();
    }

    /**
     * @inheritDoc
     */
    public function apiKey(): string
    {
        return 'api_key_3';
    }

    /**
     * @inheritDoc
     */
    public function networkId(): string
    {
        return 'network_id_3';
    }

    /**
     * @inheritDoc
     */
    public function requestOptions(): array
    {
        return [];
    }
    
}

$networks->registerNetwork(new CustomNetwork(), false);

$affiliateApi = new AffiliateApi($networks);

$affiliateApi->networks->switchToNetwork('network_id_3');
```

### Network API - [Docs](https://developers.tune.com/network/)

Allows network owners to manage all aspects of their networks programmatically and outside of the application itself.

#### Example

```php
use Tune\Tune;
use Tune\Networks;
use Tune\NetworkApi;

$tuneNetworkApi = new NetworkApi($networks = new Networks());
// 0r
$tuneNetworkApi = Tune::networkApi($networks);
```

### Affiliate API - [Docs](https://developers.tune.com/affiliate/)

Allows affiliates of network owners to retrieve and manage data in TUNE programmatically.

#### Example

```php
use Tune\Tune;
use Tune\Networks;
use Tune\AffiliateApi;

$tuneAffiliateApi = new AffiliateApi($networks = new Networks());
// 0r
$tuneAffiliateApi = Tune::affiliateApi($networks);
```

### Advertiser API - [Docs](https://developers.tune.com/advertiser/)

Allows advertisers working with network owners to retrieve data from TUNE.

#### Example

```php
use Tune\Tune;
use Tune\Networks;
use Tune\AdvertiserApi;

$tuneAdvertiserApi = new AdvertiserApi($networks = new Networks());
// 0r
$tuneAdvertiserApi = Tune::advertiserApi($networks);
```

### API Call Example

```php
use Tune\Networks;
use Tune\AffiliateApi;
use Tune\Utils\Operator;
use Tune\Utils\HttpQueryBuilder;

$affiliateApi = new AffiliateApi(new Networks());

print_r($affiliateApi->report()->getConversions(function (HttpQueryBuilder $builder) {
    return $builder->setFields([
        'Browser.id',
        'Browser.display_name',
        'OfferUrl.preview_url',
        'Offer.name'
    ])->addFilter('Stat.datetime', [
        '2019-12-19 00:00:00',
        '2020-12-19 00:00:00'
    ], null, Operator::BETWEEN);
}, /* Request options */ []));

// Or 

print_r($affiliateApi->report()->getConversions([
    'filters' => [
        'Stat.datetime' => [
            'conditional' => Operator::BETWEEN,
            'values' => [
                '2019-12-19 00:00:00',
                '2020-12-19 00:00:00'
            ]
        ]
    ],
    'fields' => [
        'Browser.id',
        'Browser.display_name',
        'OfferUrl.preview_url',
        'Offer.name'
    ]
], /* Request options */ []));
```