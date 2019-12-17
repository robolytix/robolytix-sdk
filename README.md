# Robolytix

<h1 align="center">
  <img width="150px" src="https://www.robolytix.com/screens/robolytix-sonar-icon-512.png" alt="Send Sonar to Robolytix.com" title="Robolytix.com">
</h1>

Examples in different languages how to call Robolytix API and send message (integrate Sonar). 

Detailed description of Robolytix principles and API is in [technical documentation section](https://www.robolytix.com/docs/). Generate your API Key in [Robolytix Settings](https://app.robolytix.com/en/admin/). There is also OpenAPI specification of Robolytix API at https://api.robolytix.com/apidoc/.

## How to integrate

Connector from external platform usually implements only one action called Sonar. This action calls **/messages** endpoint. There are two endpoints **/listprocesses** and **/listtypes** that serve enumerations for main call. The rest of the endpoints are just for validation connection and authorization.

1. Test endpoint **/ping** from your environment
2. Create Robolytix account and test Sonar
   1. Create account at [Robolytix Signup](https://app.robolytix.com/en/Signup)
   2. Create process and API key
   3. Execute endpoint **/messages** with your testing message
   4. See data in Robolytix - process message list
3. Implement endpoints **/listprocesses** and **/listtypes** 

## Connector :star:

Robolytix connector have currently only one public action. This action is called Sonar and inplements endpoint **/messages**. There is a wireframe for Sonar appearance in most of the RPA / BPA platforms.

![Robolytix Sonar action](https://www.robolytix.com/screens/robolytix-sonar-wireframe.png)

### Connection

Most of the platforms have connection manager. This is the place, where users can manage credentials and authentication to connected services. Robolytix uses API keys for 

### Backend endpoints 

The two endpoints **/listprocesses** and **/listtypes** are used for backend calls (also named Remote Procedures) for filing values to Sonar properties. They server as enumerations for dropdown inputs. Endpoint **/listprocesses** returns list of values for **processid** property and **/listtypes** returns list of values for **type** property. Endpoint **type** can be cached and implemented in connector as constant enumeration.

## Endpoints

There are two main endpoints for communication with Robolytix API:

* **Messages** - for sending messages from Sonars.
https://api.robolytix.com/v1/messages
* **List processes** - for listing all processes associated with selected account.
https://api.robolytix.com/v1/listprocesses
* **List types** - for listing all message types.
https://api.robolytix.com/v1/listtypes

There are also two endpoints for testing and developing purposes:

* **Ping** - testing of API communication.
https://api.robolytix.com/v1/ping
* **Account** - validating account credentials (API key).
https://api.robolytix.com/v1/account

## Languages

* PHP
* Python
