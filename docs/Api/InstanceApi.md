# ChatApiCom\Client\InstanceApi

All URIs are relative to *{protocol}://api.chat-api.com/instance{instanceId}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getQRCode**](InstanceApi.md#getQRCode) | **GET** /qr_code | Direct link to QR-code in the form of an image, not base64.
[**getSettings**](InstanceApi.md#getSettings) | **GET** /settings | Get settings
[**getStatus**](InstanceApi.md#getStatus) | **GET** /status | Get the account status and QR code for authorization.
[**logout**](InstanceApi.md#logout) | **POST** /logout | Logout from WhatsApp Web to get new QR code.
[**reboot**](InstanceApi.md#reboot) | **POST** /reboot | Logout from WhatsApp Web to get new QR code.
[**setSettings**](InstanceApi.md#setSettings) | **POST** /settings | Set settings

# **getQRCode**
> string getQRCode()

Direct link to QR-code in the form of an image, not base64.

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

$apiInstance = new ChatApiCom\Client\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getQRCode();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->getQRCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: image/png

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSettings**
> \ChatApiCom\Client\Model\Settings getSettings()

Get settings

**webhookUrl** - Http or https URL for receiving notifications. For testing, we recommend using http://bin.chat-api.com.  **ackNotificationsOn** - Turn on/off ack (message delivered and message viewed) notifications in webhooks. GET method works for the same address.  **chatUpdateOn** - Turn on/off chat update notifications in webhooks. GET method works for the same address.  **videoUploadOn** - Turn on/off receiving video messages.  **proxy** - Socks5 IP address and port proxy for instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: token
$config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$apiInstance = new ChatApiCom\Client\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->getSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ChatApiCom\Client\Model\Settings**](../Model/Settings.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatus**
> \ChatApiCom\Client\Model\InstanceStatus getStatus()

Get the account status and QR code for authorization.

Reauthorization is necessary only in case of changing the device or manually pressing \"Logout on all devices\" on the phone. Keep the WhastsApp application open during authorization.  Instance statuses:  **authenticated** -  Authorization passed successfully  **init** -  Initial status   **loading** -  The system is still loading, try again in 1 minute   **got qr code** -  There is a QR code and you need to take a picture of it in the Whatsapp application by going to Menu -> WhatsApp Web -> Add. QR code is valid for one minute. Example showing base64 images on a page. Manually easier to get QR-code as an image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: token
$config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$apiInstance = new ChatApiCom\Client\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->getStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ChatApiCom\Client\Model\InstanceStatus**](../Model/InstanceStatus.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **logout**
> \ChatApiCom\Client\Model\InlineResponse200 logout()

Logout from WhatsApp Web to get new QR code.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: token
$config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$apiInstance = new ChatApiCom\Client\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->logout();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->logout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ChatApiCom\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reboot**
> \ChatApiCom\Client\Model\InlineResponse2001 reboot()

Logout from WhatsApp Web to get new QR code.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: token
$config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$apiInstance = new ChatApiCom\Client\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->reboot();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->reboot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ChatApiCom\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setSettings**
> setSettings($body, $webhook_url, $ack_notifications_on, $chat_update_on, $video_upload_on, $proxy)

Set settings

**webhookUrl** - Http or https URL for receiving notifications. For testing, we recommend using http://bin.chat-api.com.  **ackNotificationsOn** - Turn on/off ack (message delivered and message viewed) notifications in webhooks. GET method works for the same address.  **chatUpdateOn** - Turn on/off chat update notifications in webhooks. GET method works for the same address.  **videoUploadOn** - Turn on/off receiving video messages.  **proxy** - Socks5 IP address and port proxy for instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: token
$config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$apiInstance = new ChatApiCom\Client\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ChatApiCom\Client\Model\Settings(); // \ChatApiCom\Client\Model\Settings |
$webhook_url = "webhook_url_example"; // string | 
$ack_notifications_on = true; // bool | 
$chat_update_on = true; // bool | 
$video_upload_on = true; // bool | 
$proxy = "proxy_example"; // string | 

try {
    $apiInstance->setSettings($body, $webhook_url, $ack_notifications_on, $chat_update_on, $video_upload_on, $proxy);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->setSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ChatApiCom\Client\Model\Settings**](../Model/Settings.md)|  |
 **webhook_url** | **string**|  | [optional]
 **ack_notifications_on** | **bool**|  | [optional]
 **chat_update_on** | **bool**|  | [optional]
 **video_upload_on** | **bool**|  | [optional]
 **proxy** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

