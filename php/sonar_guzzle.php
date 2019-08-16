<?php 

    // Set API KEY generated in your Account settings 
    $API_KEY = '';
    
    $client = new \GuzzleHttp\Client([
        'headers' => [ 
            'Content-Type' => 'application/json',
            'Authorization' => $API_KEY
        ]
    ]);
    
    // load json data
    $body = fopen('/message.json', 'r');
    
    $response = $client->post('https://api.robolytix.com/v1/messages',
        ['body' => json_encode($body)]
    );

?>