# Ivz\Client\MyApi

All URIs are relative to *https://localhost/api/client/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCallStatsItem**](MyApi.md#getCallStatsItem) | **GET** /my/call_stats | Retrieves a CallStats resource.
[**getMyActiveCallsActiveCallsItem**](MyApi.md#getMyActiveCallsActiveCallsItem) | **GET** /my/active_calls | Retrieves a ActiveCalls resource.
[**getMyCallForwardSettingsCallForwardSettingCollection**](MyApi.md#getMyCallForwardSettingsCallForwardSettingCollection) | **GET** /my/call_forward_settings | Retrieves the collection of CallForwardSetting resources.
[**getMyCallHistoryUsersCdrCollection**](MyApi.md#getMyCallHistoryUsersCdrCollection) | **GET** /my/call_history | Retrieves the collection of UsersCdr resources.
[**getMyCompanyAssistantsUserCollection**](MyApi.md#getMyCompanyAssistantsUserCollection) | **GET** /my/company_assistants | Retrieves the collection of User resources.
[**getMyCompanyCountryCountryItem**](MyApi.md#getMyCompanyCountryCountryItem) | **GET** /my/company_country | Retrieves a Country resource.
[**getMyCompanyExtensionsExtensionCollection**](MyApi.md#getMyCompanyExtensionsExtensionCollection) | **GET** /my/company_extensions | Retrieves the collection of Extension resources.
[**getMyCompanyVoicemailsUserCollection**](MyApi.md#getMyCompanyVoicemailsUserCollection) | **GET** /my/company_voicemails | Retrieves the collection of User resources.
[**getMyProfileUserItem**](MyApi.md#getMyProfileUserItem) | **GET** /my/profile | Retrieves a User resource.
[**getMyRegistrationSummaryRegistrationSummaryItem**](MyApi.md#getMyRegistrationSummaryRegistrationSummaryItem) | **GET** /my/registration_summary | Retrieves a RegistrationSummary resource.
[**getUserStatusItem**](MyApi.md#getUserStatusItem) | **GET** /my/status | Retrieves a UserStatus resource.
[**getWebThemeItem**](MyApi.md#getWebThemeItem) | **GET** /my/web_theme | Retrieves a WebTheme resource.
[**postMyCallForwardSettingsCallForwardSettingItem**](MyApi.md#postMyCallForwardSettingsCallForwardSettingItem) | **POST** /my/call_forward_settings | Creates a CallForwardSetting resource.
[**putMyProfileUserItem**](MyApi.md#putMyProfileUserItem) | **PUT** /my/profile | Replaces the User resource.


# **getCallStatsItem**
> \Ivz\Client\Model\CallStats getCallStatsItem()

Retrieves a CallStats resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ivz\Client\Api\MyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCallStatsItem();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyApi->getCallStatsItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ivz\Client\Model\CallStats**](../Model/CallStats.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/csv, application/xml, text/xml, text/html, application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyActiveCallsActiveCallsItem**
> \Ivz\Client\Model\ActiveCalls getMyActiveCallsActiveCallsItem()

Retrieves a ActiveCalls resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ivz\Client\Api\MyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMyActiveCallsActiveCallsItem();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyApi->getMyActiveCallsActiveCallsItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ivz\Client\Model\ActiveCalls**](../Model/ActiveCalls.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyCallForwardSettingsCallForwardSettingCollection**
> \Ivz\Client\Model\CallForwardSettingDetailedCollection[] getMyCallForwardSettingsCallForwardSettingCollection($_page, $_items_per_page)

Retrieves the collection of CallForwardSetting resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ivz\Client\Api\MyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_page = 56; // int | The collection page number
$_items_per_page = 56; // int | The number of items per page

try {
    $result = $apiInstance->getMyCallForwardSettingsCallForwardSettingCollection($_page, $_items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyApi->getMyCallForwardSettingsCallForwardSettingCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_page** | **int**| The collection page number | [optional]
 **_items_per_page** | **int**| The number of items per page | [optional]

### Return type

[**\Ivz\Client\Model\CallForwardSettingDetailedCollection[]**](../Model/CallForwardSettingDetailedCollection.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyCallHistoryUsersCdrCollection**
> \Ivz\Client\Model\UsersCdr[] getMyCallHistoryUsersCdrCollection($callee, $callee_end, $callee_exact, $callee_exists, $callee_partial, $callee_start, $caller, $caller_end, $caller_exact, $caller_exists, $caller_partial, $caller_start, $callid, $callid_hash, $callid_hash_end, $callid_hash_exact, $callid_hash_exists, $callid_hash_partial, $callid_hash_start, $callid_end, $callid_exact, $callid_exists, $callid_partial, $callid_start, $direction, $direction_end, $direction_exact, $direction_exists, $direction_partial, $direction_start, $diversion, $diversion_end, $diversion_exact, $diversion_exists, $diversion_partial, $diversion_start, $duration, $duration_between, $duration_gt, $duration_gte, $duration_lt, $duration_lte, $end_time, $end_time_after, $end_time_before, $end_time_start, $end_time_strictly_after, $end_time_strictly_before, $friend, $friend2, $friend_exists, $id_exact, $referee, $referee_end, $referee_exact, $referee_exists, $referee_partial, $referee_start, $referrer, $referrer_end, $referrer_exact, $referrer_exists, $referrer_partial, $referrer_start, $residential_device, $residential_device2, $residential_device_exists, $retail_account, $retail_account2, $retail_account_exists, $start_time, $start_time_after, $start_time_before, $start_time_start, $start_time_strictly_after, $start_time_strictly_before, $user, $user2, $user_exists, $xcallid, $xcallid_end, $xcallid_exact, $xcallid_exists, $xcallid_partial, $xcallid_start, $_order_callee, $_order_caller, $_order_callid_hash, $_order_callid, $_order_direction, $_order_diversion, $_order_duration, $_order_end_time, $_order_id, $_order_referee, $_order_referrer, $_order_start_time, $_order_xcallid, $_items_per_page, $_page, $_properties, $_pagination, $_timezone)

Retrieves the collection of UsersCdr resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ivz\Client\Api\MyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$callee = "callee_example"; // string | 
$callee_end = "callee_end_example"; // string | 
$callee_exact = "callee_exact_example"; // string | 
$callee_exists = true; // bool | 
$callee_partial = "callee_partial_example"; // string | 
$callee_start = "callee_start_example"; // string | 
$caller = "caller_example"; // string | 
$caller_end = "caller_end_example"; // string | 
$caller_exact = "caller_exact_example"; // string | 
$caller_exists = true; // bool | 
$caller_partial = "caller_partial_example"; // string | 
$caller_start = "caller_start_example"; // string | 
$callid = "callid_example"; // string | 
$callid_hash = "callid_hash_example"; // string | 
$callid_hash_end = "callid_hash_end_example"; // string | 
$callid_hash_exact = "callid_hash_exact_example"; // string | 
$callid_hash_exists = true; // bool | 
$callid_hash_partial = "callid_hash_partial_example"; // string | 
$callid_hash_start = "callid_hash_start_example"; // string | 
$callid_end = "callid_end_example"; // string | 
$callid_exact = "callid_exact_example"; // string | 
$callid_exists = true; // bool | 
$callid_partial = "callid_partial_example"; // string | 
$callid_start = "callid_start_example"; // string | 
$direction = "direction_example"; // string | 
$direction_end = "direction_end_example"; // string | 
$direction_exact = "direction_exact_example"; // string | 
$direction_exists = true; // bool | 
$direction_partial = "direction_partial_example"; // string | 
$direction_start = "direction_start_example"; // string | 
$diversion = "diversion_example"; // string | 
$diversion_end = "diversion_end_example"; // string | 
$diversion_exact = "diversion_exact_example"; // string | 
$diversion_exists = true; // bool | 
$diversion_partial = "diversion_partial_example"; // string | 
$diversion_start = "diversion_start_example"; // string | 
$duration = 8.14; // float | 
$duration_between = "duration_between_example"; // string | 
$duration_gt = "duration_gt_example"; // string | 
$duration_gte = "duration_gte_example"; // string | 
$duration_lt = "duration_lt_example"; // string | 
$duration_lte = "duration_lte_example"; // string | 
$end_time = "end_time_example"; // string | 
$end_time_after = "end_time_after_example"; // string | 
$end_time_before = "end_time_before_example"; // string | 
$end_time_start = "end_time_start_example"; // string | 
$end_time_strictly_after = "end_time_strictly_after_example"; // string | 
$end_time_strictly_before = "end_time_strictly_before_example"; // string | 
$friend = "friend_example"; // string | 
$friend2 = "friend_example"; // string | 
$friend_exists = true; // bool | 
$id_exact = 56; // int | 
$referee = "referee_example"; // string | 
$referee_end = "referee_end_example"; // string | 
$referee_exact = "referee_exact_example"; // string | 
$referee_exists = true; // bool | 
$referee_partial = "referee_partial_example"; // string | 
$referee_start = "referee_start_example"; // string | 
$referrer = "referrer_example"; // string | 
$referrer_end = "referrer_end_example"; // string | 
$referrer_exact = "referrer_exact_example"; // string | 
$referrer_exists = true; // bool | 
$referrer_partial = "referrer_partial_example"; // string | 
$referrer_start = "referrer_start_example"; // string | 
$residential_device = "residential_device_example"; // string | 
$residential_device2 = "residential_device_example"; // string | 
$residential_device_exists = true; // bool | 
$retail_account = "retail_account_example"; // string | 
$retail_account2 = "retail_account_example"; // string | 
$retail_account_exists = true; // bool | 
$start_time = "start_time_example"; // string | 
$start_time_after = "start_time_after_example"; // string | 
$start_time_before = "start_time_before_example"; // string | 
$start_time_start = "start_time_start_example"; // string | 
$start_time_strictly_after = "start_time_strictly_after_example"; // string | 
$start_time_strictly_before = "start_time_strictly_before_example"; // string | 
$user = "user_example"; // string | 
$user2 = "user_example"; // string | 
$user_exists = true; // bool | 
$xcallid = "xcallid_example"; // string | 
$xcallid_end = "xcallid_end_example"; // string | 
$xcallid_exact = "xcallid_exact_example"; // string | 
$xcallid_exists = true; // bool | 
$xcallid_partial = "xcallid_partial_example"; // string | 
$xcallid_start = "xcallid_start_example"; // string | 
$_order_callee = "_order_callee_example"; // string | 
$_order_caller = "_order_caller_example"; // string | 
$_order_callid_hash = "_order_callid_hash_example"; // string | 
$_order_callid = "_order_callid_example"; // string | 
$_order_direction = "_order_direction_example"; // string | 
$_order_diversion = "_order_diversion_example"; // string | 
$_order_duration = "_order_duration_example"; // string | 
$_order_end_time = "_order_end_time_example"; // string | 
$_order_id = "_order_id_example"; // string | 
$_order_referee = "_order_referee_example"; // string | 
$_order_referrer = "_order_referrer_example"; // string | 
$_order_start_time = "_order_start_time_example"; // string | 
$_order_xcallid = "_order_xcallid_example"; // string | 
$_items_per_page = 56; // int | The number of items per page
$_page = 56; // int | The collection page number
$_properties = "_properties_example"; // string | 
$_pagination = true; // bool | 
$_timezone = "_timezone_example"; // string | Use a time zone of choice instead of the token user one (Applies to both input and output)

try {
    $result = $apiInstance->getMyCallHistoryUsersCdrCollection($callee, $callee_end, $callee_exact, $callee_exists, $callee_partial, $callee_start, $caller, $caller_end, $caller_exact, $caller_exists, $caller_partial, $caller_start, $callid, $callid_hash, $callid_hash_end, $callid_hash_exact, $callid_hash_exists, $callid_hash_partial, $callid_hash_start, $callid_end, $callid_exact, $callid_exists, $callid_partial, $callid_start, $direction, $direction_end, $direction_exact, $direction_exists, $direction_partial, $direction_start, $diversion, $diversion_end, $diversion_exact, $diversion_exists, $diversion_partial, $diversion_start, $duration, $duration_between, $duration_gt, $duration_gte, $duration_lt, $duration_lte, $end_time, $end_time_after, $end_time_before, $end_time_start, $end_time_strictly_after, $end_time_strictly_before, $friend, $friend2, $friend_exists, $id_exact, $referee, $referee_end, $referee_exact, $referee_exists, $referee_partial, $referee_start, $referrer, $referrer_end, $referrer_exact, $referrer_exists, $referrer_partial, $referrer_start, $residential_device, $residential_device2, $residential_device_exists, $retail_account, $retail_account2, $retail_account_exists, $start_time, $start_time_after, $start_time_before, $start_time_start, $start_time_strictly_after, $start_time_strictly_before, $user, $user2, $user_exists, $xcallid, $xcallid_end, $xcallid_exact, $xcallid_exists, $xcallid_partial, $xcallid_start, $_order_callee, $_order_caller, $_order_callid_hash, $_order_callid, $_order_direction, $_order_diversion, $_order_duration, $_order_end_time, $_order_id, $_order_referee, $_order_referrer, $_order_start_time, $_order_xcallid, $_items_per_page, $_page, $_properties, $_pagination, $_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyApi->getMyCallHistoryUsersCdrCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **callee** | **string**|  | [optional]
 **callee_end** | **string**|  | [optional]
 **callee_exact** | **string**|  | [optional]
 **callee_exists** | **bool**|  | [optional]
 **callee_partial** | **string**|  | [optional]
 **callee_start** | **string**|  | [optional]
 **caller** | **string**|  | [optional]
 **caller_end** | **string**|  | [optional]
 **caller_exact** | **string**|  | [optional]
 **caller_exists** | **bool**|  | [optional]
 **caller_partial** | **string**|  | [optional]
 **caller_start** | **string**|  | [optional]
 **callid** | **string**|  | [optional]
 **callid_hash** | **string**|  | [optional]
 **callid_hash_end** | **string**|  | [optional]
 **callid_hash_exact** | **string**|  | [optional]
 **callid_hash_exists** | **bool**|  | [optional]
 **callid_hash_partial** | **string**|  | [optional]
 **callid_hash_start** | **string**|  | [optional]
 **callid_end** | **string**|  | [optional]
 **callid_exact** | **string**|  | [optional]
 **callid_exists** | **bool**|  | [optional]
 **callid_partial** | **string**|  | [optional]
 **callid_start** | **string**|  | [optional]
 **direction** | **string**|  | [optional]
 **direction_end** | **string**|  | [optional]
 **direction_exact** | **string**|  | [optional]
 **direction_exists** | **bool**|  | [optional]
 **direction_partial** | **string**|  | [optional]
 **direction_start** | **string**|  | [optional]
 **diversion** | **string**|  | [optional]
 **diversion_end** | **string**|  | [optional]
 **diversion_exact** | **string**|  | [optional]
 **diversion_exists** | **bool**|  | [optional]
 **diversion_partial** | **string**|  | [optional]
 **diversion_start** | **string**|  | [optional]
 **duration** | **float**|  | [optional]
 **duration_between** | **string**|  | [optional]
 **duration_gt** | **string**|  | [optional]
 **duration_gte** | **string**|  | [optional]
 **duration_lt** | **string**|  | [optional]
 **duration_lte** | **string**|  | [optional]
 **end_time** | **string**|  | [optional]
 **end_time_after** | **string**|  | [optional]
 **end_time_before** | **string**|  | [optional]
 **end_time_start** | **string**|  | [optional]
 **end_time_strictly_after** | **string**|  | [optional]
 **end_time_strictly_before** | **string**|  | [optional]
 **friend** | **string**|  | [optional]
 **friend2** | **string**|  | [optional]
 **friend_exists** | **bool**|  | [optional]
 **id_exact** | **int**|  | [optional]
 **referee** | **string**|  | [optional]
 **referee_end** | **string**|  | [optional]
 **referee_exact** | **string**|  | [optional]
 **referee_exists** | **bool**|  | [optional]
 **referee_partial** | **string**|  | [optional]
 **referee_start** | **string**|  | [optional]
 **referrer** | **string**|  | [optional]
 **referrer_end** | **string**|  | [optional]
 **referrer_exact** | **string**|  | [optional]
 **referrer_exists** | **bool**|  | [optional]
 **referrer_partial** | **string**|  | [optional]
 **referrer_start** | **string**|  | [optional]
 **residential_device** | **string**|  | [optional]
 **residential_device2** | **string**|  | [optional]
 **residential_device_exists** | **bool**|  | [optional]
 **retail_account** | **string**|  | [optional]
 **retail_account2** | **string**|  | [optional]
 **retail_account_exists** | **bool**|  | [optional]
 **start_time** | **string**|  | [optional]
 **start_time_after** | **string**|  | [optional]
 **start_time_before** | **string**|  | [optional]
 **start_time_start** | **string**|  | [optional]
 **start_time_strictly_after** | **string**|  | [optional]
 **start_time_strictly_before** | **string**|  | [optional]
 **user** | **string**|  | [optional]
 **user2** | **string**|  | [optional]
 **user_exists** | **bool**|  | [optional]
 **xcallid** | **string**|  | [optional]
 **xcallid_end** | **string**|  | [optional]
 **xcallid_exact** | **string**|  | [optional]
 **xcallid_exists** | **bool**|  | [optional]
 **xcallid_partial** | **string**|  | [optional]
 **xcallid_start** | **string**|  | [optional]
 **_order_callee** | **string**|  | [optional]
 **_order_caller** | **string**|  | [optional]
 **_order_callid_hash** | **string**|  | [optional]
 **_order_callid** | **string**|  | [optional]
 **_order_direction** | **string**|  | [optional]
 **_order_diversion** | **string**|  | [optional]
 **_order_duration** | **string**|  | [optional]
 **_order_end_time** | **string**|  | [optional]
 **_order_id** | **string**|  | [optional]
 **_order_referee** | **string**|  | [optional]
 **_order_referrer** | **string**|  | [optional]
 **_order_start_time** | **string**|  | [optional]
 **_order_xcallid** | **string**|  | [optional]
 **_items_per_page** | **int**| The number of items per page | [optional]
 **_page** | **int**| The collection page number | [optional]
 **_properties** | **string**|  | [optional]
 **_pagination** | **bool**|  | [optional]
 **_timezone** | **string**| Use a time zone of choice instead of the token user one (Applies to both input and output) | [optional]

### Return type

[**\Ivz\Client\Model\UsersCdr[]**](../Model/UsersCdr.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyCompanyAssistantsUserCollection**
> \Ivz\Client\Model\User[] getMyCompanyAssistantsUserCollection($_page, $_items_per_page)

Retrieves the collection of User resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ivz\Client\Api\MyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_page = 56; // int | The collection page number
$_items_per_page = 56; // int | The number of items per page

try {
    $result = $apiInstance->getMyCompanyAssistantsUserCollection($_page, $_items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyApi->getMyCompanyAssistantsUserCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_page** | **int**| The collection page number | [optional]
 **_items_per_page** | **int**| The number of items per page | [optional]

### Return type

[**\Ivz\Client\Model\User[]**](../Model/User.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyCompanyCountryCountryItem**
> \Ivz\Client\Model\CountryDetailed getMyCompanyCountryCountryItem()

Retrieves a Country resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ivz\Client\Api\MyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMyCompanyCountryCountryItem();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyApi->getMyCompanyCountryCountryItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ivz\Client\Model\CountryDetailed**](../Model/CountryDetailed.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyCompanyExtensionsExtensionCollection**
> \Ivz\Client\Model\Extension[] getMyCompanyExtensionsExtensionCollection($_page, $_items_per_page)

Retrieves the collection of Extension resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ivz\Client\Api\MyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_page = 56; // int | The collection page number
$_items_per_page = 56; // int | The number of items per page

try {
    $result = $apiInstance->getMyCompanyExtensionsExtensionCollection($_page, $_items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyApi->getMyCompanyExtensionsExtensionCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_page** | **int**| The collection page number | [optional]
 **_items_per_page** | **int**| The number of items per page | [optional]

### Return type

[**\Ivz\Client\Model\Extension[]**](../Model/Extension.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyCompanyVoicemailsUserCollection**
> \Ivz\Client\Model\User[] getMyCompanyVoicemailsUserCollection($_page, $_items_per_page)

Retrieves the collection of User resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ivz\Client\Api\MyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_page = 56; // int | The collection page number
$_items_per_page = 56; // int | The number of items per page

try {
    $result = $apiInstance->getMyCompanyVoicemailsUserCollection($_page, $_items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyApi->getMyCompanyVoicemailsUserCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_page** | **int**| The collection page number | [optional]
 **_items_per_page** | **int**| The number of items per page | [optional]

### Return type

[**\Ivz\Client\Model\User[]**](../Model/User.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyProfileUserItem**
> \Ivz\Client\Model\UserMyProfile getMyProfileUserItem()

Retrieves a User resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ivz\Client\Api\MyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMyProfileUserItem();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyApi->getMyProfileUserItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ivz\Client\Model\UserMyProfile**](../Model/UserMyProfile.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyRegistrationSummaryRegistrationSummaryItem**
> \Ivz\Client\Model\RegistrationSummary getMyRegistrationSummaryRegistrationSummaryItem()

Retrieves a RegistrationSummary resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ivz\Client\Api\MyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMyRegistrationSummaryRegistrationSummaryItem();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyApi->getMyRegistrationSummaryRegistrationSummaryItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ivz\Client\Model\RegistrationSummary**](../Model/RegistrationSummary.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserStatusItem**
> \Ivz\Client\Model\UserStatus getUserStatusItem()

Retrieves a UserStatus resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ivz\Client\Api\MyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUserStatusItem();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyApi->getUserStatusItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ivz\Client\Model\UserStatus**](../Model/UserStatus.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/csv, application/xml, text/xml, text/html, application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebThemeItem**
> \Ivz\Client\Model\WebTheme getWebThemeItem()

Retrieves a WebTheme resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ivz\Client\Api\MyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWebThemeItem();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyApi->getWebThemeItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ivz\Client\Model\WebTheme**](../Model/WebTheme.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/csv, application/xml, text/xml, text/html, application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMyCallForwardSettingsCallForwardSettingItem**
> \Ivz\Client\Model\CallForwardSetting postMyCallForwardSettingsCallForwardSettingItem($call_forward_setting)

Creates a CallForwardSetting resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ivz\Client\Api\MyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$call_forward_setting = new \Ivz\Client\Model\CallForwardSetting(); // \Ivz\Client\Model\CallForwardSetting | The updated CallForwardSetting resource

try {
    $result = $apiInstance->postMyCallForwardSettingsCallForwardSettingItem($call_forward_setting);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyApi->postMyCallForwardSettingsCallForwardSettingItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **call_forward_setting** | [**\Ivz\Client\Model\CallForwardSetting**](../Model/CallForwardSetting.md)| The updated CallForwardSetting resource | [optional]

### Return type

[**\Ivz\Client\Model\CallForwardSetting**](../Model/CallForwardSetting.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/json, application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putMyProfileUserItem**
> \Ivz\Client\Model\UserMyProfile putMyProfileUserItem($user)

Replaces the User resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ivz\Client\Api\MyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = new \Ivz\Client\Model\UserUpdateMyProfile(); // \Ivz\Client\Model\UserUpdateMyProfile | The updated User resource

try {
    $result = $apiInstance->putMyProfileUserItem($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyApi->putMyProfileUserItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | [**\Ivz\Client\Model\UserUpdateMyProfile**](../Model/UserUpdateMyProfile.md)| The updated User resource | [optional]

### Return type

[**\Ivz\Client\Model\UserMyProfile**](../Model/UserMyProfile.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/json, application/ld+json, text/csv, application/xml, text/xml, text/html, application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

