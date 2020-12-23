<?php

namespace Tune;

use Tune\Utils\UseApiCalls;
use Tune\Controllers\Network\AdManager;
use Tune\Controllers\Network\Advertiser;
use Tune\Controllers\Network\AdvertiserBilling;
use Tune\Controllers\Network\AdvertiserUser;
use Tune\Controllers\Network\Affiliate;
use Tune\Controllers\Network\AffiliateBilling;
use Tune\Controllers\Network\AffiliateUser;
use Tune\Controllers\Network\Alert;
use Tune\Controllers\Network\ApiKey;
use Tune\Controllers\Network\Application;
use Tune\Controllers\Network\Authentication;
use Tune\Controllers\Network\CashflowGroup;
use Tune\Controllers\Network\Conversion;
use Tune\Controllers\Network\ConversionMeta;
use Tune\Controllers\Network\CustomMenuLink;
use Tune\Controllers\Network\CustomPage;
use Tune\Controllers\Network\CustomerList;
use Tune\Controllers\Network\DneList;
use Tune\Controllers\Network\DownloadReport;
use Tune\Controllers\Network\Employee;
use Tune\Controllers\Network\Goal;
use Tune\Controllers\Network\InsertionOrder;
use Tune\Controllers\Network\InsertionOrderOffer;
use Tune\Controllers\Network\Notification;
use Tune\Controllers\Network\NotificationCenter;
use Tune\Controllers\Network\Offer;
use Tune\Controllers\Network\OfferDisabledLink;
use Tune\Controllers\Network\OfferFile;
use Tune\Controllers\Network\OfferPixel;
use Tune\Controllers\Network\OfferTargeting;
use Tune\Controllers\Network\OfferUrl;
use Tune\Controllers\Network\OfferWhitelist;
use Tune\Controllers\Network\Optimizer;
use Tune\Controllers\Network\OptimizerExclusion;
use Tune\Controllers\Network\OptimizerNetworkPreference;
use Tune\Controllers\Network\Preference;
use Tune\Controllers\Network\RawLog;
use Tune\Controllers\Network\Report;
use Tune\Controllers\Network\RingRevenue;
use Tune\Controllers\Network\SavedReports;
use Tune\Controllers\Network\ScheduledOfferChange;
use Tune\Controllers\Network\Tag;
use Tune\Controllers\Network\TinyUrl;
use Tune\Controllers\Network\VatRate;

/**
 * @see https://developers.tune.com/network/
 * @method AdManager adManager()
 * @method Advertiser advertiser()
 * @method AdvertiserBilling advertiserBilling()
 * @method AdvertiserUser advertiserUser()
 * @method Affiliate affiliate()
 * @method AffiliateBilling affiliateBilling()
 * @method AffiliateUser affiliateUser()
 * @method Alert alert()
 * @method ApiKey apiKey()
 * @method Application application()
 * @method Authentication authentication()
 * @method CashflowGroup cashflowGroup()
 * @method Conversion conversion()
 * @method ConversionMeta conversionMeta()
 * @method CustomMenuLink customMenuLink()
 * @method CustomPage customPage()
 * @method CustomerList customerList()
 * @method DneList dneList()
 * @method DownloadReport downloadReport()
 * @method Employee employee()
 * @method Goal goal()
 * @method InsertionOrder insertionOrder()
 * @method InsertionOrderOffer insertionOrderOffer()
 * @method Notification notification()
 * @method NotificationCenter notificationCenter()
 * @method Offer offer()
 * @method OfferDisabledLink offerDisabledLink()
 * @method OfferFile offerFile()
 * @method OfferPixel offerPixel()
 * @method OfferTargeting offerTargeting()
 * @method OfferUrl offerUrl()
 * @method OfferWhitelist offerWhitelist()
 * @method Optimizer optimizer()
 * @method OptimizerExclusion optimizerExclusion()
 * @method OptimizerNetworkPreference optimizerNetworkPreference()
 * @method Preference preference()
 * @method RawLog rawLog()
 * @method Report report()
 * @method RingRevenue ringRevenue()
 * @method SavedReports savedReports()
 * @method ScheduledOfferChange scheduledOfferChange()
 * @method Tag tag()
 * @method TinyUrl tinyUrl()
 * @method VatRate vatRate()
 */
class NetworkApi extends UseApiCalls
{

}