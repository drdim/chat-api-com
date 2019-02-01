# ChatApiCom\Client\MessagesApi

All URIs are relative to *{protocol}://api.chat-api.com/instance{instanceId}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**forwardMessage**](MessagesApi.md#forwardMessage) | **POST** /forwardMessage | Forwarding messages to a new or existing chat.
[**getMmessages**](MessagesApi.md#getMmessages) | **GET** /messages | Get a list of messages.
[**sendContact**](MessagesApi.md#sendContact) | **POST** /sendContact | Sending a contact or contact list to a new or existing chat.
[**sendFile**](MessagesApi.md#sendFile) | **POST** /sendFile | Send a file to a new or existing chat.
[**sendLink**](MessagesApi.md#sendLink) | **POST** /sendLink | Send text with link and link&#x27;s preview to a new or existing chat.
[**sendLocation**](MessagesApi.md#sendLocation) | **POST** /sendLocation | Sending a location to a new or existing chat.
[**sendMessage**](MessagesApi.md#sendMessage) | **POST** /sendMessage | Send a message to a new or existing chat.
[**sendPTT**](MessagesApi.md#sendPTT) | **POST** /sendPTT | Send a ptt-audio to a new or existing chat.
[**setWebhook**](MessagesApi.md#setWebhook) | **POST** /webhook | Sets the URL for receiving webhook notifications of new messages and message delivery events (ack).

# **forwardMessage**
> \ChatApiCom\Client\Model\SendMessageStatus forwardMessage($body)

Forwarding messages to a new or existing chat.

Only one of two parameters is needed to determine the destination - chatId or phone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: token
$config = ChatApiCom\Client\Configuration::getDefaultConfiguration()
->setApiKey('token', 'YOUR_API_KEY')
->setInstanceId('YOUR_INSTANCE_ID');

$apiInstance = new ChatApiCom\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$body = new \ChatApiCom\Client\Model\SendMessageRequest(['phone' => 'TEST_PHONE', 'body' => 'MESSAGE_TEXT']);

try {
    $result = $apiInstance->sendMessage($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)|  |

### Return type

[**\ChatApiCom\Client\Model\SendMessageStatus**](../Model/SendMessageStatus.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMmessages**
> \ChatApiCom\Client\Model\Messages getMessages($last_message_number, $last, $chat_id)

Get a list of messages.

To receive only new messages, pass the **lastMessageNumber** parameter from the last query.  Files from messages are guaranteed to be stored only for 30 days and can be deleted. Download the files as soon as you get to your server.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: token
$config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$apiInstance = new ChatApiCom\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$last_message_number = 56; // int | The lastMessageNumber parameter from the last response
$last = true; // bool | Displays the last 100 messages. If this parameter is passed, then lastMessageNumber is ignored.
$chat_id = "chat_id_example"; // string | Filter messages by chatId  Chat ID from the message list. Examples: 17633123456@c.us for private messages and 17680561234-1479621234@g.us for the group. Used instead of the phone parameter.

try {
    $result = $apiInstance->getMessages($last_message_number, $last, $chat_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **last_message_number** | **int**| The lastMessageNumber parameter from the last response | [optional]
 **last** | **bool**| Displays the last 100 messages. If this parameter is passed, then lastMessageNumber is ignored. | [optional]
 **chat_id** | **string**| Filter messages by chatId  Chat ID from the message list. Examples: 17633123456@c.us for private messages and 17680561234-1479621234@g.us for the group. Used instead of the phone parameter. | [optional]

### Return type

[**\ChatApiCom\Client\Model\Messages**](../Model/Messages.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendContact**
> \ChatApiCom\Client\Model\SendMessageStatus sendContact($body)

Sending a contact or contact list to a new or existing chat.

Only one of two parameters is needed to determine the destination - chatId or phone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: token
$config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$apiInstance = new ChatApiCom\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ChatApiCom\Client\Model\null(); //  |

try {
    $result = $apiInstance->sendContact($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)|  |

### Return type

[**\ChatApiCom\Client\Model\SendMessageStatus**](../Model/SendMessageStatus.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendFile**
> \ChatApiCom\Client\Model\SendMessageStatus sendFile($body)

Send a file to a new or existing chat.

Only one of two parameters is needed to determine the destination - chatId or phone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: token
$config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$apiInstance = new ChatApiCom\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ChatApiCom\Client\Model\null(); //  |

try {
    $result = $apiInstance->sendFile($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)|  |

### Return type

[**\ChatApiCom\Client\Model\SendMessageStatus**](../Model/SendMessageStatus.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendLink**
> \ChatApiCom\Client\Model\SendMessageStatus sendLink($body)

Send text with link and link's preview to a new or existing chat.

Only one of two parameters is needed to determine the destination - chatId or phone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: token
$config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$apiInstance = new ChatApiCom\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ChatApiCom\Client\Model\null(); //  |

try {
    $result = $apiInstance->sendLink($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)|  |

### Return type

[**\ChatApiCom\Client\Model\SendMessageStatus**](../Model/SendMessageStatus.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendLocation**
> \ChatApiCom\Client\Model\SendMessageStatus sendLocation($body)

Sending a location to a new or existing chat.

Only one of two parameters is needed to determine the destination - chatId or phone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: token
$config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$apiInstance = new ChatApiCom\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ChatApiCom\Client\Model\null(); //  |

try {
    $result = $apiInstance->sendLocation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)|  |

### Return type

[**\ChatApiCom\Client\Model\SendMessageStatus**](../Model/SendMessageStatus.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendMessage**
> \ChatApiCom\Client\Model\SendMessageStatus sendMessage($body)

Send a message to a new or existing chat.

The message will be added to the queue for sending and delivered even if the phone is disconnected from the Internet or authorization is not passed.  Only one of two parameters is needed to determine the destination - chatId or phone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: token
$config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$apiInstance = new ChatApiCom\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ChatApiCom\Client\Model\null(); //  |

try {
    $result = $apiInstance->sendMessage($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)|  |

### Return type

[**\ChatApiCom\Client\Model\SendMessageStatus**](../Model/SendMessageStatus.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendPTT**
> \ChatApiCom\Client\Model\SendMessageStatus sendPTT($body)

Send a ptt-audio to a new or existing chat.

Only one of two parameters is needed to determine the destination - chatId or phone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: token
$config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$apiInstance = new ChatApiCom\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ChatApiCom\Client\Model\null(); //  |

try {
    $result = $apiInstance->sendPTT($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendPTT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)|  |

### Return type

[**\ChatApiCom\Client\Model\SendMessageStatus**](../Model/SendMessageStatus.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setWebhook**
> \ChatApiCom\Client\Model\SetWebhookStatus setWebhook($body, $webhook_url)

Sets the URL for receiving webhook notifications of new messages and message delivery events (ack).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: token
$config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$apiInstance = new ChatApiCom\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ChatApiCom\Client\Model\WebhookUrl(); // \ChatApiCom\Client\Model\WebhookUrl |
$webhook_url = "webhook_url_example"; // string | 

try {
    $result = $apiInstance->setWebhook($body, $webhook_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->setWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ChatApiCom\Client\Model\WebhookUrl**](../Model/WebhookUrl.md)|  |
 **webhook_url** | **string**|  | [optional]

### Return type

[**\ChatApiCom\Client\Model\SetWebhookStatus**](../Model/SetWebhookStatus.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

