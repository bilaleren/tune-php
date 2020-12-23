<?php

namespace Tune\Utils;

use Tune\Networks;
use Tune\Exception\TuneNetworkException;
use Tune\Exception\TuneNotFoundException;

class UseApiCalls
{

    /**
     * @var Networks
     */
    public $networks;

    public function __construct(Networks $networks)
    {
        $this->networks = $networks;
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public function __call(string $name, array $arguments)
    {
        $class = ucfirst($name);
        $namespace = explode('\\', static::class);
        $namespace = str_replace('Api', '', end($namespace));

        if (!class_exists($class = "Tune\Controllers\\$namespace\\$class")) {
            throw new TuneNotFoundException("Class [$class] not found.");
        }

        if (empty($network = $this->networks->getCurrentNetwork())) {
            throw new TuneNetworkException('Invalid current network.');
        }

        return new $class($network);
    }

}