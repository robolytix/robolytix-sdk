# Robolytix

Examples in various languages how to call Robolytix API and send message. 

Detailed description of Robolytix principles and API is in [technical documentation section](https://www.robolytix.com/docs/). Generate your API Key in [Robolytix Settings](https://app.robolytix.com/en/admin/). There is also OpenAPI specification of Robolytix API at https://api.robolytix.com/apidoc/.

# Integration steps

1. Test endpoint **/ping** from your environment
2. Create Robolytix account and test Sonar
  1. Create account at [Robolytix Signup](https://app.robolytix.com/en/Signup)
  2. Create process and API key
  3. Execute endpoint **/messages** with your testing message
  4. See data in Robolytix - process message list
3. Implement endpoints **/listprocesses** and **/listtypes** 

## Endpoints

There are two main endpoints for communication with Robolytix API:

* **Messages** - for sending messages from Sonars.
https://api.robolytix.com/v1/messages
* **List processes** - for listing all processes associated with selected account.
https://api.robolytix.com/v1/listprocesses
* **List types** - for listing all message types.
https://api.robolytix.com/v1/listtypes

There are also two endpoint for testing and developing purposes:

* **Ping** - testing of API communication.
https://api.robolytix.com/v1/ping
* **Account** - validating account credentials (API key).
https://api.robolytix.com/v1/account

## Languages

* PHP
* Python
