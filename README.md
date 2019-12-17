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

## Connector

Robolytix connector have currently only one public action. This action is called Sonar and inplements endpoint **/messages**. There is a wireframe for Sonar appearance in most of the RPA / BPA platforms.

![Robolytix Sonar action](https://www.robolytix.com/screens/Robolytix-Sonar-Wireframe.png)

### Connection

Most of the platforms have connection manager. This is the place, where users can manage credentials and authentication to connected services. Robolytix uses API keys for authorization, so processes in platform are connected with processes in Robolytix.

### Backend endpoints 

The two endpoints **/listprocesses** and **/listtypes** are used for backend calls (also named Remote Procedures) for filing values to Sonar properties. They server as enumerations for dropdown inputs. Endpoint **/listprocesses** returns list of values for **processid** property and **/listtypes** returns list of values for **type** property. Endpoint **type** can be cached and implemented in connector as constant enumeration.

### Properties

Sonar action have a few properties visible to end users. Definition of all properties is in OpenAPI definition at https://api.robolytix.com/apidoc/.

* **name**\
  hint: *"Name of the current sonar should be unique in the whole process."*\
  type: *string*
  
* **processid** - Process identification must contain one GUID from **/listprocesses** endpoint.\
  hint: *"List of processes in the selected account. For creating a new process go to Robolytix Settings."*\
  type: *string*
  
* **type** - Message type must contain one name from **/listtypes** endpoint.\
  hint: *"Every process should start at sonars type Start and end at sonars type End. The number of Continuous sonars is unlimited. Use Error sonars for handling errors. Valid values are start, common, end and error."*\
  type: *string*
  
* **runid**\
  hint: *"Unique identification of one process run. Such as timestamp of first action or sonar."*\
  type: *string*
  
* *service*\
  *This property is hidden from endusers, but it is required. Identification of RPA tool. Its value should be tool name, or unique identification string (e.g. "Integromat", "Zapier",...).*\
  type: *string*

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
