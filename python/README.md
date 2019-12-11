# swagger-client
Robolytix is the key online analytic and monitoring tool for Robotic Process Automation using Sonar technology to evaluate, audit, monitor and improve performance of robots operating in any application, RPA platform or custom solution. Manage your RPA projects effectively with exact KPIs. Visualise your whole process at one place.

For more information, please visit [http://support.robolytix.com/](http://support.robolytix.com/)

## Requirements.

Python 2.7 and 3.4+

## Installation & Usage
### pip install

If the python package is hosted on Github, you can install directly from Github

```sh
pip install git+https://github.com/GIT_USER_ID/GIT_REPO_ID.git
```
(you may need to run `pip` with root permission: `sudo pip install git+https://github.com/GIT_USER_ID/GIT_REPO_ID.git`)

Then import the package:
```python
import robolytix_client 
```

### Setuptools

Install via [Setuptools](http://pypi.python.org/pypi/setuptools).

```sh
python setup.py install --user
```
(or `sudo python setup.py install` to install the package for all users)

Then import the package:
```python
import robolytix_client
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://api.robolytix.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CommonApi* | [**account**](docs/CommonApi.md#account) | **GET** /account | Account details
*CommonApi* | [**ping**](docs/CommonApi.md#ping) | **GET** /ping | Ping
*DefaultApi* | [**listprocesses**](docs/DefaultApi.md#listprocesses) | **GET** /listprocesses | List processes
*DefaultApi* | [**listtypes**](docs/DefaultApi.md#listtypes) | **GET** /listtypes | List types
*DefaultApi* | [**sonar**](docs/DefaultApi.md#sonar) | **POST** /messages | Sonar

## Documentation For Models

 - [InlineResponseDefault](docs/InlineResponseDefault.md)
 - [InlineResponseDefault1](docs/InlineResponseDefault1.md)
 - [InlineResponseDefault2](docs/InlineResponseDefault2.md)
 - [InlineResponseDefault2Data](docs/InlineResponseDefault2Data.md)
 - [Message](docs/Message.md)
 - [Process](docs/Process.md)
 - [Type](docs/Type.md)

## Documentation For Authorization


## api_key

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author


