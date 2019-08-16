<?php

    // Set API KEY generated in your Account settings 
    $API_KEY = 'XXX';
    
    // A sample PHP Script to POST data using cURL
    // Data in JSON format
     
    $data = array(
        'processid' => '2C7224D6-2521-4B58-958E-C7F46C10EBB1',
        'runid' => 'FE36D2D5-12EA-43E4-B68E-6E7D23077BC4',
        'service' => 'SDK',        
        'name' => 'Adding data', 
        'type' => 'common',         
    ); 
     
    $payload = json_encode($data);
     
    // Prepare new cURL resource
    $ch = curl_init('https://api.robolytix.com/v1/messages');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
     
    // Set HTTP Header for POST request 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($payload),
        'Authorization: ' . $API_KEY)
    );
     
    // Submit the POST request
    $result = curl_exec($ch);
     
    // Close cURL session handle
    curl_close($ch);
 
    // Print response
    var_dump($response);
?>