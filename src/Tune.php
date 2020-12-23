<?php

namespace Tune;

class Tune
{

    /**
     * @param Networks $networks
     * @return NetworkApi
     */
    public static function networkApi(Networks $networks)
    {
        return new NetworkApi($networks);
    }

    /**
     * @param Networks $networks
     * @return AffiliateApi
     */
    public static function affiliateApi(Networks $networks)
    {
        return new AffiliateApi($networks);
    }

    /**
     * @param Networks $networks
     * @return AdvertiserApi
     */
    public static function advertiserApi(Networks $networks)
    {
        return new AdvertiserApi($networks);
    }

}