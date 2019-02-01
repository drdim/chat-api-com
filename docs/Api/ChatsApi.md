# ChatApiCom\Client\ChatsApi

All URIs are relative to *{protocol}://api.chat-api.com/instance{instanceId}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addGroupParticipant**](ChatsApi.md#addGroupParticipant) | **POST** /addGroupParticipant | Adding a participant to a group
[**creatGroup**](ChatsApi.md#creatGroup) | **POST** /group | Creates a group and sends the message to the created group.
[**getChats**](ChatsApi.md#getChats) | **GET** /dialogs | Get the chat list.
[**readChat**](ChatsApi.md#readChat) | **POST** /readChat | Open chat for reading messages

# **addGroupParticipant**
> \ChatApiCom\Client\Model\AddGroupParticipantStatus addGroupParticipant($body, $group_id, $participant_chat_id, $participant_phone)

Adding a participant to a group

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

$apiInstance = new ChatApiCom\Client\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ChatApiCom\Client\Model\AddGroupParticipantAction(); // \ChatApiCom\Client\Model\AddGroupParticipantAction |
$group_id = "group_id_example"; // string | 
$participant_chat_id = "participant_chat_id_example"; // string | 
$participant_phone = 56; // int | 

try {
    $result = $apiInstance->addGroupParticipant($body, $group_id, $participant_chat_id, $participant_phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->addGroupParticipant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ChatApiCom\Client\Model\AddGroupParticipantAction**](../Model/AddGroupParticipantAction.md)|  |
 **group_id** | **string**|  | [optional]
 **participant_chat_id** | **string**|  | [optional]
 **participant_phone** | **int**|  | [optional]

### Return type

[**\ChatApiCom\Client\Model\AddGroupParticipantStatus**](../Model/AddGroupParticipantStatus.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creatGroup**
> \ChatApiCom\Client\Model\CreateGroupStatus creatGroup($body, $group_name, $phones, $message_text)

Creates a group and sends the message to the created group.

The group will be added to the queue for sending and sooner or later it will be created, even if the phone is disconnected from the Internet or the authorization is not passed.   2 Oct 2018 update: chatId parameter will be returned if group was created on your phone within 20 second.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChatApiCom\Client\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ChatApiCom\Client\Model\CreateGroupAction(); // \ChatApiCom\Client\Model\CreateGroupAction |
$group_name = "group_name_example"; // string | 
$phones = array("phones_example"); // string[] | 
$message_text = "message_text_example"; // string | 

try {
    $result = $apiInstance->creatGroup($body, $group_name, $phones, $message_text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->creatGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ChatApiCom\Client\Model\CreateGroupAction**](../Model/CreateGroupAction.md)|  |
 **group_name** | **string**|  | [optional]
 **phones** | [**string[]**](../Model/string.md)|  | [optional]
 **message_text** | **string**|  | [optional]

### Return type

[**\ChatApiCom\Client\Model\CreateGroupStatus**](../Model/CreateGroupStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChats**
> \ChatApiCom\Client\Model\Chats getChats()

Get the chat list.

The chat list includes avatars.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: token
$config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$apiInstance = new ChatApiCom\Client\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getChats();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->getChats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ChatApiCom\Client\Model\Chats**](../Model/Chats.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readChat**
> \ChatApiCom\Client\Model\ReadChatStatus readChat($body, $chat_id, $phone)

Open chat for reading messages

Use this method to make users see their messages read.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: token
$config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChatApiCom\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$apiInstance = new ChatApiCom\Client\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ChatApiCom\Client\Model\ReadChatAction(); // \ChatApiCom\Client\Model\ReadChatAction |
$chat_id = "chat_id_example"; // string | 
$phone = "phone_example"; // string | 

try {
    $result = $apiInstance->readChat($body, $chat_id, $phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->readChat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ChatApiCom\Client\Model\ReadChatAction**](../Model/ReadChatAction.md)|  |
 **chat_id** | **string**|  | [optional]
 **phone** | **string**|  | [optional]

### Return type

[**\ChatApiCom\Client\Model\ReadChatStatus**](../Model/ReadChatStatus.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

