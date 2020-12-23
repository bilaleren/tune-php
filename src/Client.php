<?php

namespace Tune;

use GuzzleHttp\RequestOptions;
use GuzzleHttp\Client as BaseClient;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use Tune\Exception\TuneRequestException;
use GuzzleHttp\Exception\TransferException;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\TooManyRedirectsException;
use Tune\Repository\NetworkRepository;

class Client
{

    /**
     * @var BaseClient
     */
    protected $client;

    /**
     * @var string
     */
    protected $uri = '';

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @var string
     */
    protected $apiKeyParamName;

    public function __construct(NetworkRepository $config, string $apiKeyParamName = 'api_key')
    {
        $this->apiKey = $config->apiKey();
        $this->apiKeyParamName = $apiKeyParamName;
        $this->client = new BaseClient($config->requestOptions());
        $this->uri = sprintf('https://%s.api.hasoffers.com/Apiv3/json', $config->networkId());
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array $options
     * @return ResponseInterface
     * @throws TuneRequestException
     */
    public function request(string $method, string $uri, array $options = []): ResponseInterface
    {
        try {
            return $this->client->request($method, $uri, $options);
        } catch (TooManyRedirectsException $e) {
            throw new TuneRequestException($e->getMessage(), $e->getCode());
        } catch (ClientException $e) {
            throw new TuneRequestException($e->getMessage(), $e->getCode());
        } catch (ServerException $e) {
            throw new TuneRequestException($e->getMessage(), $e->getCode());
        } catch (BadResponseException $e) {
            throw new TuneRequestException($e->getMessage(), $e->getCode());
        } catch (TransferException $e) {
            throw new TuneRequestException($e->getMessage(), $e->getCode());
        } catch (GuzzleException $e) {
            throw new TuneRequestException($e->getMessage(), $e->getCode());
        }
    }

    /**
     * @param array $options
     * @param string $method
     * @return mixed
     * @throws TuneRequestException
     */
     public function call(array $options = [], string $method = 'GET')
     {
         $options[RequestOptions::QUERY][$this->apiKeyParamName] = $this->apiKey;

         $response = $this->request($method, $this->uri, $options)->getBody();

         $response->rewind();

         return json_decode($response->getContents());
    }

}