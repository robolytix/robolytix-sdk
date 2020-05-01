# Robolytix

<p align="center">
  <img width="150px" src="https://www.robolytix.com/screens/robolytix-sonar-icon-512.png" alt="Send Sonar to Robolytix.com" title="Robolytix.com">
</p>

This repository contains examples in different languages how to call Robolytix API and send message data (integrate Sonar). 

Detailed description of Robolytix principles and API is in [technical documentation section](https://www.robolytix.com/docs/). Generate your API Key in [Robolytix Settings](https://app.robolytix.com/en/admin/). There is also OpenAPI / Swagger specification of Robolytix API at https://api.robolytix.com/apidoc/.

## Overview

There two ways of integration your application with Robolytix.

1. Send message to Robolytix ([individual message](#send-message-data) or [in bulk](#send-bulk-message-data))
2. [Integrate full-featured connector](#how-to-integrate-connector) (with other entities like process)

Go to [list of endpoints](#endpoints) or [list of programming languages](#languages) in this repository.

## Send message data

Main endpoint for sending data from process to Robolytix for analysis is **/messages** endpoint. Detailed description is located in specification https://api.robolytix.com/apidoc/. Following example sends data with popular *cURL* utility.
```bash
# options -v and -i are for verbose mode and writing HTTP headers to output
curl -X POST -H 'Authorization: Token 0cf4f956-1230-4e07-a746-94c09598a483' -H 'Content-Type: application/json' -d '{"name":"Start process","type":"start","processid":"55624b9f-63ca-4793-8412-082b43a4db39"}' -v -i 'https://api.robolytix.com/v1/messages'
```

### Send bulk message data

There is also endpoint **/messages/bulk** for sending multiple messages at once. It utilizes the same message structure as previous endpoint but accepts array of these records.

It is highly suggested to use property *createdon*. This property represents the time, when reported event occurs in your system. If the value is empty, the message received time will be used. Consult valid [date time formats](#date-time-formats). 

## How to integrate connector

Connector from external platform usually implements only one action called Sonar. This action calls **/messages** endpoint. There are two endpoints **/listprocesses** and **/listtypes** that serve enumerations for main call. The rest of the endpoints are just for validation connection and authorization.

1. Test endpoint **/ping** from your environment
2. Create Robolytix account and test Sonar
   1. Create account at [Robolytix Signup](https://app.robolytix.com/en/Signup)
   2. Create process and API key
   3. Execute endpoint **/messages** with your testing message
   4. See data in Robolytix - process message list
3. Implement endpoints **/listprocesses** and **/listtypes** 

### Connector design

Robolytix connector currently have only one public action. This action is called Sonar and inplements endpoint **/messages**. There is a wireframe for Sonar appearance in most of the RPA / BPA platforms.

![Robolytix Sonar Action UI](https://www.robolytix.com/screens/robolytix-sonar-wireframe.png)

### Workflows

Connector implementation usually composes of three main parts.
* **Connection** - Management and setting credentials to service.
* **Settings** - Setting values for specific action, it is usually done by user form.
* **Execution** - Essential execution of the underlying action.

![Robolytix Sonar Workflows](https://www.robolytix.com/screens/robolytix-sonar-workflow.png)

### Connection

Most of the platforms have connection manager. This is the place, where users can manage credentials and authentication to connected services. Robolytix uses API keys for authorization, so processes in platform are connected with processes in Robolytix.

### Backend endpoints 

The two endpoints **/listprocesses** and **/listtypes** are used for backend calls (also named Remote Procedures) for filing values to Sonar properties. They server as enumerations for dropdown inputs. Endpoint **/listprocesses** returns list of values for **processid** property and **/listtypes** returns list of values for **type** property. Endpoint **type** can be cached and implemented in connector as constant enumeration.

### Message properties

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
  
* *createdon*\
  hint: *"Message created datetime. Valid values are in "2006-02-14T15:04", "2006-02-14" or full RFC3339 (yyyy-MM-dd'T'HH:mm:ssZ) formats. If the value is empty, the message received time will be used."*\
  type: *string*
  
### Date time formats

It is possible to override created date of message with property *createdon*. This property represents time, when event occur in the system. It is usually exchanged for time, when message is received by the API (this is also the default value, when property is not used). The are several formats, that are valid for datetime values. This list contains examples for representation of **14th of February 2020 15:04:35.078 BST / London**. 

* Date format "yyyy-MM-dd"  
  Example value is *"2020-02-14"*.
  
* Date with time format "yyyy-MM-dd'T'HH:mm"  
  Example value is *"2020-02-14T15:04"*. 
  
* RFC3339 "yyyy-MM-dd'T'HH:mm:ssZ" format  
  Example value is *"2020-02-14T15:04:35+01:00"*. 

* RFC3339 "yyyy-MM-dd'T'HH:mm:ss.iZ" format with effective precision up to 3 decimal places (milliseconds)  
  Example value is *"2020-02-14T15:04:35.078+01:00"*.  
  
## Endpoints

There are two main endpoints for communication with Robolytix API:

* **Messages** - for sending messages from Sonars.
https://api.robolytix.com/v1/messages
* **Bulk messages** - for sending array of messages from Sonars.
https://api.robolytix.com/v1/messages/bulk

There are also two endpoints for for other entities (*process* and *type of sonar*):

* **List processes** - for listing all processes associated with selected account.
https://api.robolytix.com/v1/listprocesses
* **List types** - for listing all message types.
https://api.robolytix.com/v1/listtypes

And two endpoints for testing and developing purposes:

* **Ping** - testing of API communication.
https://api.robolytix.com/v1/ping
* **Account** - validating account credentials (API key).
https://api.robolytix.com/v1/account

## Languages

* PHP
* Python
