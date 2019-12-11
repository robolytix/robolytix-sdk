# robolytix_client.DefaultApi

All URIs are relative to *https://api.robolytix.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listprocesses**](DefaultApi.md#listprocesses) | **GET** /listprocesses | List processes
[**listtypes**](DefaultApi.md#listtypes) | **GET** /listtypes | List types
[**sonar**](DefaultApi.md#sonar) | **POST** /messages | Sonar

# **listprocesses**
> list[Process] listprocesses()

List processes

Get list of processes associated with current account.

### Example
```python
from __future__ import print_function
import time
import robolytix_client
from robolytix_client.rest import ApiException
from pprint import pprint

# Configure API key authorization: api_key
configuration = robolytix_client.Configuration()
configuration.api_key['Authorization'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# configuration.api_key_prefix['Authorization'] = 'Bearer'

# create an instance of the API class
api_instance = robolytix_client.DefaultApi(robolytix_client.ApiClient(configuration))

try:
    # List processes
    api_response = api_instance.listprocesses()
    pprint(api_response)
except ApiException as e:
    print("Exception when calling DefaultApi->listprocesses: %s\n" % e)
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Process]**](Process.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listtypes**
> InlineResponseDefault1 listtypes()

List types

Get list of Sonar types.

### Example
```python
from __future__ import print_function
import time
import robolytix_client
from robolytix_client.rest import ApiException
from pprint import pprint

# Configure API key authorization: api_key
configuration = robolytix_client.Configuration()
configuration.api_key['Authorization'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# configuration.api_key_prefix['Authorization'] = 'Bearer'

# create an instance of the API class
api_instance = robolytix_client.DefaultApi(robolytix_client.ApiClient(configuration))

try:
    # List types
    api_response = api_instance.listtypes()
    pprint(api_response)
except ApiException as e:
    print("Exception when calling DefaultApi->listtypes: %s\n" % e)
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponseDefault1**](InlineResponseDefault1.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **sonar**
> InlineResponseDefault2 sonar(body, content_type)

Sonar

Monitors and views this process in Robolytix.

### Example
```python
from __future__ import print_function
import time
import robolytix_client
from robolytix_client.rest import ApiException
from pprint import pprint

# Configure API key authorization: api_key
configuration = robolytix_client.Configuration()
configuration.api_key['Authorization'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# configuration.api_key_prefix['Authorization'] = 'Bearer'

# create an instance of the API class
api_instance = robolytix_client.DefaultApi(robolytix_client.ApiClient(configuration))
body = robolytix_client.Message() # Message | 
content_type = 'content_type_example' # str | Content-Type

try:
    # Sonar
    api_response = api_instance.sonar(body, content_type)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling DefaultApi->sonar: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**Message**](Message.md)|  | 
 **content_type** | **str**| Content-Type | 

### Return type

[**InlineResponseDefault2**](InlineResponseDefault2.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

