# ChatApiCom\Client\BanApi

All URIs are relative to *{protocol}://api.chat-api.com/instance{instanceId}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**banTest**](BanApi.md#banTest) | **POST** /banTest | Test ban settings
[**getBanSettings**](BanApi.md#getBanSettings) | **GET** /banSettings | Get settings
[**setBanSettings**](BanApi.md#setBanSettings) | **POST** /banSettings | Set settings

# **banTest**
> \ChatApiCom\Client\Model\BanTestStatus banTest($body, $phone)

Test ban settings

Send the phone number to find out if the instance is banning it

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

$apiInstance = new ChatApiCom\Client\Api\BanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ChatApiCom\Client\Model\BanTestAction(); // \ChatApiCom\Client\Model\BanTestAction |
$phone = "phone_example"; // string | 

try {
    $result = $apiInstance->banTest($body, $phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BanApi->banTest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ChatApiCom\Client\Model\BanTestAction**](../Model/BanTestAction.md)|  |
 **phone** | **string**|  | [optional]

### Return type

[**\ChatApiCom\Client\Model\BanTestStatus**](../Model/BanTestStatus.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBanSettings**
> \ChatApiCom\Client\Model\BanSettings getBanSettings()

Get settings

**banPhoneMask** - Regular expression on which bans on numbers will be sent  **preBanMessage** - Warning message If it is set, a message will be sent before sending the ban.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: token
$config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$apiInstance = new ChatApiCom\Client\Api\BanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBanSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BanApi->getBanSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ChatApiCom\Client\Model\BanSettings**](../Model/BanSettings.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBanSettings**
> \ChatApiCom\Client\Model\BanSettings setBanSettings($body, $ban_phone_mask, $pre_ban_message, $set)

Set settings

**banPhoneMask** - Regular expression on which bans on numbers will be sent  **preBanMessage** - Warning message If it is set, a message will be sent before sending the ban.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: token
$config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$apiInstance = new ChatApiCom\Client\Api\BanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ChatApiCom\Client\Model\BanSettings(); // \ChatApiCom\Client\Model\BanSettings |
$ban_phone_mask = "ban_phone_mask_example"; // string | 
$pre_ban_message = "pre_ban_message_example"; // string | 
$set = true; // bool | 

try {
    $result = $apiInstance->setBanSettings($body, $ban_phone_mask, $pre_ban_message, $set);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BanApi->setBanSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ChatApiCom\Client\Model\BanSettings**](../Model/BanSettings.md)|  |
 **ban_phone_mask** | **string**|  | [optional]
 **pre_ban_message** | **string**|  | [optional]
 **set** | **bool**|  | [optional]

### Return type

[**\ChatApiCom\Client\Model\BanSettings**](../Model/BanSettings.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

