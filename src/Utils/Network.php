<?php

namespace Tune\Utils;

use Tune\Repository\NetworkRepository;

class BlankNetwork implements NetworkRepository
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @var string
     */
    protected $networkId;

    /**
     * @var array
     */
    protected $requestOptions;

    public function __construct(string $apiKey, string $networkId, ?string $name = null, array $requestOptions = [])
    {
        $this->name = $name;
        $this->apiKey = $apiKey;
        $this->networkId = $networkId;
        $this->requestOptions = $requestOptions;
    }

    /**
     * @inheritDoc
     */
    public function name(): string
    {
        return $this->networkId;
    }

    /**
     * @inheritDoc
     */
    public function apiKey(): string
    {
        return $this->apiKey;
    }

    /**
     * @inheritDoc
     */
    public function networkId(): string
    {
        return $this->name ?? $this->networkId;
    }

    /**
     * @inheritDoc
     */
    public function requestOptions(): array
    {
        return $this->requestOptions;
    }

}