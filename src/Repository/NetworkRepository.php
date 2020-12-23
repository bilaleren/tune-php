<?php

namespace Tune\Repository;

interface NetworkRepository
{

    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return string
     */
    public function apiKey(): string;

    /**
     * @return string
     */
    public function networkId(): string;

    /**
     * @return array
     */
    public function requestOptions(): array;

}