# robolytix_client.CommonApi

All URIs are relative to *https://api.robolytix.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**account**](CommonApi.md#account) | **GET** /account | Account details
[**ping**](CommonApi.md#ping) | **GET** /ping | Ping

# **account**
> InlineResponseDefault account()

Account details

The Account resource is used for validating account credentials.

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
api_instance = robolytix_client.CommonApi(robolytix_client.ApiClient(configuration))

try:
    # Account details
    api_response = api_instance.account()
    pprint(api_response)
except ApiException as e:
    print("Exception when calling CommonApi->account: %s\n" % e)
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponseDefault**](InlineResponseDefault.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **ping**
> object ping()

Ping

The Ping resource is used to check the status of the Robolytix API. No credentials are required for this resource to validate the API.

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
api_instance = robolytix_client.CommonApi(robolytix_client.ApiClient(configuration))

try:
    # Ping
    api_response = api_instance.ping()
    pprint(api_response)
except ApiException as e:
    print("Exception when calling CommonApi->ping: %s\n" % e)
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[api_key](../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

