<?php

namespace Tune;

use Tune\Repository\NetworkRepository;
use Tune\Exception\TuneNetworkException;

class Networks
{

    /**
     * @var NetworkRepository|null
     */
    protected $network = null;

    /**
     * @var NetworkRepository[]
     */
    protected $networks = [];

    public function __construct(array $networks = [])
    {
        foreach ($networks as $switchTo => $network) {
            $this->registerNetwork($network, false);
        }

        if (isset($networks[0])) {
            $this->switchToNetwork($networks[0]->name());
        }
    }

    /**
     * @return NetworkRepository[]|null
     */
    public function getNetworks()
    {
        return $this->networks;
    }

    /**
     * @return NetworkRepository|null
     */
    public function getCurrentNetwork()
    {
        return $this->network;
    }

    /**
     * @param NetworkRepository $network
     * @param bool $switchToNetwork
     * @return $this
     */
    public function registerNetwork(NetworkRepository $network, bool $switchToNetwork = true)
    {
        $this->networks[$network->name()] = $network;

        if ($switchToNetwork) {
            $this->switchToNetwork($network->name());
        }

        return $this;
    }

    /**
     * @param string $networkName
     * @return $this
     */
    public function switchToNetwork(string $networkName)
    {
        if (!isset($this->networks[$networkName])) {
            throw new TuneNetworkException("Network [$networkName] not found.");
        }

        $this->network = $this->networks[$networkName];

        return $this;
    }

}