# Ivz\Client\KamApi

All URIs are relative to *https://localhost/api/client/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUsersCdrCollection**](KamApi.md#getUsersCdrCollection) | **GET** /users_cdrs | Retrieves the collection of UsersCdr resources.
[**getUsersCdrItem**](KamApi.md#getUsersCdrItem) | **GET** /users_cdrs/{id} | Retrieves a UsersCdr resource.


# **getUsersCdrCollection**
> \Ivz\Client\Model\UsersCdrCollection[] getUsersCdrCollection($callee, $callee_end, $callee_exact, $callee_exists, $callee_partial, $callee_start, $caller, $caller_end, $caller_exact, $caller_exists, $caller_partial, $caller_start, $direction, $direction_end, $direction_exact, $direction_exists, $direction_partial, $direction_start, $duration, $duration_between, $duration_gt, $duration_gte, $duration_lt, $duration_lte, $end_time, $end_time_after, $end_time_before, $end_time_start, $end_time_strictly_after, $end_time_strictly_before, $friend, $friend2, $friend_exists, $id_exact, $residential_device, $residential_device2, $residential_device_exists, $retail_account, $retail_account2, $retail_account_exists, $start_time, $start_time_after, $start_time_before, $start_time_start, $start_time_strictly_after, $start_time_strictly_before, $user, $user2, $user_exists, $_order_callee, $_order_caller, $_order_direction, $_order_duration, $_order_end_time, $_order_id, $_order_start_time, $_items_per_page, $_page, $_properties, $_pagination, $_timezone)

Retrieves the collection of UsersCdr resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ivz\Client\Api\KamApi(
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
$direction = "direction_example"; // string | 
$direction_end = "direction_end_example"; // string | 
$direction_exact = "direction_exact_example"; // string | 
$direction_exists = true; // bool | 
$direction_partial = "direction_partial_example"; // string | 
$direction_start = "direction_start_example"; // string | 
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
$_order_callee = "_order_callee_example"; // string | 
$_order_caller = "_order_caller_example"; // string | 
$_order_direction = "_order_direction_example"; // string | 
$_order_duration = "_order_duration_example"; // string | 
$_order_end_time = "_order_end_time_example"; // string | 
$_order_id = "_order_id_example"; // string | 
$_order_start_time = "_order_start_time_example"; // string | 
$_items_per_page = 56; // int | The number of items per page
$_page = 56; // int | The collection page number
$_properties = "_properties_example"; // string | 
$_pagination = true; // bool | 
$_timezone = "_timezone_example"; // string | Use a time zone of choice instead of the token user one (Applies to both input and output)

try {
    $result = $apiInstance->getUsersCdrCollection($callee, $callee_end, $callee_exact, $callee_exists, $callee_partial, $callee_start, $caller, $caller_end, $caller_exact, $caller_exists, $caller_partial, $caller_start, $direction, $direction_end, $direction_exact, $direction_exists, $direction_partial, $direction_start, $duration, $duration_between, $duration_gt, $duration_gte, $duration_lt, $duration_lte, $end_time, $end_time_after, $end_time_before, $end_time_start, $end_time_strictly_after, $end_time_strictly_before, $friend, $friend2, $friend_exists, $id_exact, $residential_device, $residential_device2, $residential_device_exists, $retail_account, $retail_account2, $retail_account_exists, $start_time, $start_time_after, $start_time_before, $start_time_start, $start_time_strictly_after, $start_time_strictly_before, $user, $user2, $user_exists, $_order_callee, $_order_caller, $_order_direction, $_order_duration, $_order_end_time, $_order_id, $_order_start_time, $_items_per_page, $_page, $_properties, $_pagination, $_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KamApi->getUsersCdrCollection: ', $e->getMessage(), PHP_EOL;
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
 **direction** | **string**|  | [optional]
 **direction_end** | **string**|  | [optional]
 **direction_exact** | **string**|  | [optional]
 **direction_exists** | **bool**|  | [optional]
 **direction_partial** | **string**|  | [optional]
 **direction_start** | **string**|  | [optional]
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
 **_order_callee** | **string**|  | [optional]
 **_order_caller** | **string**|  | [optional]
 **_order_direction** | **string**|  | [optional]
 **_order_duration** | **string**|  | [optional]
 **_order_end_time** | **string**|  | [optional]
 **_order_id** | **string**|  | [optional]
 **_order_start_time** | **string**|  | [optional]
 **_items_per_page** | **int**| The number of items per page | [optional]
 **_page** | **int**| The collection page number | [optional]
 **_properties** | **string**|  | [optional]
 **_pagination** | **bool**|  | [optional]
 **_timezone** | **string**| Use a time zone of choice instead of the token user one (Applies to both input and output) | [optional]

### Return type

[**\Ivz\Client\Model\UsersCdrCollection[]**](../Model/UsersCdrCollection.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsersCdrItem**
> \Ivz\Client\Model\UsersCdrDetailed getUsersCdrItem($id, $_timezone)

Retrieves a UsersCdr resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ivz\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ivz\Client\Api\KamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$_timezone = "_timezone_example"; // string | Use a time zone of choice instead of the token user one (Applies to both input and output)

try {
    $result = $apiInstance->getUsersCdrItem($id, $_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KamApi->getUsersCdrItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **_timezone** | **string**| Use a time zone of choice instead of the token user one (Applies to both input and output) | [optional]

### Return type

[**\Ivz\Client\Model\UsersCdrDetailed**](../Model/UsersCdrDetailed.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

