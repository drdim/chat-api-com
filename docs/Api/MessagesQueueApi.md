# ChatApiCom\Client\MessagesQueueApi

All URIs are relative to *{protocol}://api.chat-api.com/instance{instanceId}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**clearMessagesQueue**](MessagesQueueApi.md#clearMessagesQueue) | **POST** /clearMessagesQueue | clearMessagesQueue
[**showMessagesQueue**](MessagesQueueApi.md#showMessagesQueue) | **GET** /showMessagesQueue | Get outbound messages queue.

# **clearMessagesQueue**
> \ChatApiCom\Client\Model\ClearMessagesQueueStatus clearMessagesQueue()

clearMessagesQueue

This method is needed when you accidentally sent thousands of messages in a row.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: token
$config = ChatApiCom\Client\Configuration::getDefaultConfiguration()
->setApiKey('token', 'YOUR_API_KEY')
->setInstanceId('YOUR_INSTANCE_ID');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$apiInstance = new ChatApiCom\Client\Api\MessagesQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->clearMessagesQueue();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesQueueApi->clearMessagesQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ChatApiCom\Client\Model\ClearMessagesQueueStatus**](../Model/ClearMessagesQueueStatus.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showMessagesQueue**
> \ChatApiCom\Client\Model\OutboundMessages showMessagesQueue()

Get outbound messages queue.

to do

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: token
$config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$apiInstance = new ChatApiCom\Client\Api\MessagesQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->showMessagesQueue();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesQueueApi->showMessagesQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ChatApiCom\Client\Model\OutboundMessages**](../Model/OutboundMessages.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

