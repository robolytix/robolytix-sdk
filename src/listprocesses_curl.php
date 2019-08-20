<?php

    // Set API KEY generated in your Account settings 
    $API_KEY = 'XXX';
     
    // Prepare new cURL resource
    $ch = curl_init('https://api.robolytix.com/v1/listprocesses');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    curl_setopt($ch, CURLOPT_POST, false);    
     
    // Set HTTP Header for POST request 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Authorization: ' . $API_KEY)
    );
     
    // Submit the POST request
    $result = curl_exec($ch);
     
    // Close cURL session handle
    curl_close($ch);
 
    // Print response
    var_dump($result);
?>