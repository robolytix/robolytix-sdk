# Robolytix

Examples in various languages how to call Robolytix API and send message. 

Detailed description of Robolytix principles and API is in [documentation section](https://www.robolytix.com/documentation/overview/). Generate your API Key in [Robolytix Settings](https://app.robolytix.com/en/admin/). There is also OpenAPI specification of Robolytix API at https://api.robolytix.com/apidoc/.

## Endpoints

There are two main endpoints for communication with Robolytix API:

* **Messages** - for sending messages from Sonars.
https://api.robolytix.com/v1/messages
* **List processes** - for listing all processes associated with selected account.
https://api.robolytix.com/v1/listprocesses

There are also two endpoint for testing and developing purposes:

* **Ping** - testing of API communication.
https://api.robolytix.com/v1/ping
* **Account** - validating account credentials (API key).
https://api.robolytix.com/v1/account

## Languages

* PHP
