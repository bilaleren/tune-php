<?php

namespace Tune\Controllers;

use Closure;
use Tune\Client;
use ReflectionClass;
use GuzzleHttp\RequestOptions;
use Tune\Utils\HttpQueryBuilder;
use Tune\Exception\TuneException;
use Tune\Repository\NetworkRepository;
use Tune\Exception\TuneRequestException;
use Tune\Exception\TuneNotFoundException;

abstract class Controller
{

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var string
     */
    protected $apiKeyParamName = 'api_key';

    public function __construct(NetworkRepository $networkConfig)
    {
        if (empty($networkConfig->apiKey())) {
            throw new TuneException('Invalid apiKey parameter.');
        }

        if (empty($networkConfig->networkId())) {
            throw new TuneException('Invalid networkId parameter.');
        }

        $this->client = new Client($networkConfig, $this->apiKeyParamName);
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return mixed
     * @throws TuneRequestException
     * @throws TuneNotFoundException
     */
    public function __call(string $name, array $arguments)
    {
        $query = [];
        $options = [];

        if (!in_array($name, $this->getClassUsableMethods())) {
            throw new TuneNotFoundException(sprintf('Method [%s] not found in [%s].', $name, static::class));
        }

        if (isset($arguments[0])) {
            if (is_array($arguments[0])) {
                $query = $arguments[0];
            } else if ($arguments[0] instanceof Closure) {
                $closure = $arguments[0](HttpQueryBuilder::make());
                if ($closure instanceof HttpQueryBuilder) {
                    $query = $closure->toArray();
                } else if (is_array($closure)) {
                    $query = $closure;
                }
            } else if ($arguments[0] instanceof HttpQueryBuilder) {
                $query = $arguments[0]->toArray();
            }
        }

        if (isset($arguments[1]) && is_array($arguments[1])) {
            $options = $arguments[1];
        }

        $query['Method'] = $name;
        $query['Target'] = $this->getTarget();

        $options[RequestOptions::QUERY] = $query;

        return $this->client->call($options);
    }

    /**
     * @return string
     */
    abstract protected function getTarget(): string;

    /**
     * @return array
     */
    protected function getClassUsableMethods(): array
    {
        $reflection = new ReflectionClass(static::class);

        preg_match_all('#@method\s[a-zA-Z].*\s([a-zA-Z_]+.*)\(.*\)#', $reflection->getDocComment(), $matches);

        return $matches[1] ?? [];
    }

}