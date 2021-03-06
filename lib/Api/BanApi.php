<?php
/**
 * BanApi
 * PHP version 5
 *
 * @category Class
 * @package  ChatApiCom\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Whatsapp API documentation
 *
 * The REST API allows you to receive and send messages through your WhatsApp account.  Parameters in GET queries pass query string. Parameters in POST requests — through the JSON-encoded request body. The authorization token is always passed to query string (?token=xxxxxx).  The WhatsApp API is based on the WhatsApp WEB protocol and excludes the ban both when using libraries from mgp25 and the like. Despite this, your account can be banned by anti-spam system WhatsApp after several clicking the \"block\" button.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: sale@chat-api.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.4
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChatApiCom\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use ChatApiCom\Client\ApiException;
use ChatApiCom\Client\Configuration;
use ChatApiCom\Client\HeaderSelector;
use ChatApiCom\Client\ObjectSerializer;

/**
 * BanApi Class Doc Comment
 *
 * @category Class
 * @package  ChatApiCom\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BanApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration $config
     * @param HeaderSelector $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    )
    {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation banTest
     *
     * Test ban settings
     *
     * @param  \ChatApiCom\Client\Model\BanTestAction $body body (required)
     * @param  string $phone phone (optional)
     *
     * @throws \ChatApiCom\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChatApiCom\Client\Model\BanTestStatus
     */
    public function banTest($body, $phone = null)
    {
        list($response) = $this->banTestWithHttpInfo($body, $phone);
        return $response;
    }

    /**
     * Operation banTestWithHttpInfo
     *
     * Test ban settings
     *
     * @param  \ChatApiCom\Client\Model\BanTestAction $body (required)
     * @param  string $phone (optional)
     *
     * @throws \ChatApiCom\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChatApiCom\Client\Model\BanTestStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function banTestWithHttpInfo($body, $phone = null)
    {
        $returnType = '\ChatApiCom\Client\Model\BanTestStatus';
        $request = $this->banTestRequest($body, $phone);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string', 'integer', 'bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];


        } catch (ApiException $e) {
            $returnType = '';
            $content = $e->getResponseBody();
            if ($returnType !== '\SplFileObject') {
                if (!in_array($returnType, ['string', 'integer', 'bool'])) {
                    $content = json_decode($content);
                }
            }
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $content,
                        '\ChatApiCom\Client\Model\BanTestStatus',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation banTestAsync
     *
     * Test ban settings
     *
     * @param  \ChatApiCom\Client\Model\BanTestAction $body (required)
     * @param  string $phone (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function banTestAsync($body, $phone = null)
    {
        return $this->banTestAsyncWithHttpInfo($body, $phone)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation banTestAsyncWithHttpInfo
     *
     * Test ban settings
     *
     * @param  \ChatApiCom\Client\Model\BanTestAction $body (required)
     * @param  string $phone (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function banTestAsyncWithHttpInfo($body, $phone = null)
    {
        $returnType = '\ChatApiCom\Client\Model\BanTestStatus';
        $request = $this->banTestRequest($body, $phone);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'banTest'
     *
     * @param  \ChatApiCom\Client\Model\BanTestAction $body (required)
     * @param  string $phone (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function banTestRequest($body, $phone = null)
    {
// verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling banTest'
            );
        }
        $resourcePath = '/banTest';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

// form params
        if ($phone !== null) {
            $formParams['phone'] = ObjectSerializer::toFormValue($phone);
        }
// body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }
// this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('token');
        if ($apiKey !== null) {
            $queryParams['token'] = $apiKey;
        }
        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $this->config->getInstanceId() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getBanSettings
     *
     * Get settings
     *
     *
     * @throws \ChatApiCom\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChatApiCom\Client\Model\BanSettings
     */
    public function getBanSettings()
    {
        list($response) = $this->getBanSettingsWithHttpInfo();
        return $response;
    }

    /**
     * Operation getBanSettingsWithHttpInfo
     *
     * Get settings
     *
     *
     * @throws \ChatApiCom\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChatApiCom\Client\Model\BanSettings, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBanSettingsWithHttpInfo()
    {
        $returnType = '\ChatApiCom\Client\Model\BanSettings';
        $request = $this->getBanSettingsRequest();

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string', 'integer', 'bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];


        } catch (ApiException $e) {
            $returnType = '';
            $content = $e->getResponseBody();
            if ($returnType !== '\SplFileObject') {
                if (!in_array($returnType, ['string', 'integer', 'bool'])) {
                    $content = json_decode($content);
                }
            }
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $content,
                        '\ChatApiCom\Client\Model\BanSettings',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBanSettingsAsync
     *
     * Get settings
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBanSettingsAsync()
    {
        return $this->getBanSettingsAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBanSettingsAsyncWithHttpInfo
     *
     * Get settings
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBanSettingsAsyncWithHttpInfo()
    {
        $returnType = '\ChatApiCom\Client\Model\BanSettings';
        $request = $this->getBanSettingsRequest();

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getBanSettings'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getBanSettingsRequest()
    {
        $resourcePath = '/banSettings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

// body params
        $_tempBody = null;
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }
// this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('token');
        if ($apiKey !== null) {
            $queryParams['token'] = $apiKey;
        }
        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $this->config->getInstanceId() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation setBanSettings
     *
     * Set settings
     *
     * @param  \ChatApiCom\Client\Model\BanSettings $body body (required)
     * @param  string $ban_phone_mask ban_phone_mask (optional)
     * @param  string $pre_ban_message pre_ban_message (optional)
     * @param  bool $set set (optional)
     *
     * @throws \ChatApiCom\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChatApiCom\Client\Model\BanSettings
     */
    public function setBanSettings($body, $ban_phone_mask = null, $pre_ban_message = null, $set = null)
    {
        list($response) = $this->setBanSettingsWithHttpInfo($body, $ban_phone_mask, $pre_ban_message, $set);
        return $response;
    }

    /**
     * Operation setBanSettingsWithHttpInfo
     *
     * Set settings
     *
     * @param  \ChatApiCom\Client\Model\BanSettings $body (required)
     * @param  string $ban_phone_mask (optional)
     * @param  string $pre_ban_message (optional)
     * @param  bool $set (optional)
     *
     * @throws \ChatApiCom\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChatApiCom\Client\Model\BanSettings, HTTP status code, HTTP response headers (array of strings)
     */
    public function setBanSettingsWithHttpInfo($body, $ban_phone_mask = null, $pre_ban_message = null, $set = null)
    {
        $returnType = '\ChatApiCom\Client\Model\BanSettings';
        $request = $this->setBanSettingsRequest($body, $ban_phone_mask, $pre_ban_message, $set);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string', 'integer', 'bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];


        } catch (ApiException $e) {
            $returnType = '';
            $content = $e->getResponseBody();
            if ($returnType !== '\SplFileObject') {
                if (!in_array($returnType, ['string', 'integer', 'bool'])) {
                    $content = json_decode($content);
                }
            }
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $content,
                        '\ChatApiCom\Client\Model\BanSettings',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation setBanSettingsAsync
     *
     * Set settings
     *
     * @param  \ChatApiCom\Client\Model\BanSettings $body (required)
     * @param  string $ban_phone_mask (optional)
     * @param  string $pre_ban_message (optional)
     * @param  bool $set (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setBanSettingsAsync($body, $ban_phone_mask = null, $pre_ban_message = null, $set = null)
    {
        return $this->setBanSettingsAsyncWithHttpInfo($body, $ban_phone_mask, $pre_ban_message, $set)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation setBanSettingsAsyncWithHttpInfo
     *
     * Set settings
     *
     * @param  \ChatApiCom\Client\Model\BanSettings $body (required)
     * @param  string $ban_phone_mask (optional)
     * @param  string $pre_ban_message (optional)
     * @param  bool $set (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setBanSettingsAsyncWithHttpInfo($body, $ban_phone_mask = null, $pre_ban_message = null, $set = null)
    {
        $returnType = '\ChatApiCom\Client\Model\BanSettings';
        $request = $this->setBanSettingsRequest($body, $ban_phone_mask, $pre_ban_message, $set);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'setBanSettings'
     *
     * @param  \ChatApiCom\Client\Model\BanSettings $body (required)
     * @param  string $ban_phone_mask (optional)
     * @param  string $pre_ban_message (optional)
     * @param  bool $set (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function setBanSettingsRequest($body, $ban_phone_mask = null, $pre_ban_message = null, $set = null)
    {
// verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling setBanSettings'
            );
        }
        $resourcePath = '/banSettings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

// form params
        if ($ban_phone_mask !== null) {
            $formParams['banPhoneMask'] = ObjectSerializer::toFormValue($ban_phone_mask);
        }
// form params
        if ($pre_ban_message !== null) {
            $formParams['preBanMessage'] = ObjectSerializer::toFormValue($pre_ban_message);
        }
// form params
        if ($set !== null) {
            $formParams['set'] = ObjectSerializer::toFormValue($set);
        }
// body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }
// this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('token');
        if ($apiKey !== null) {
            $queryParams['token'] = $apiKey;
        }
        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $this->config->getInstanceId() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
