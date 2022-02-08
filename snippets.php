<?php

/*
* Get access_token off Banco do Brasil API
*/

use GuzzleHttp\Client;


$client = new GuzzleHttp\Client();

$response = $client->request('POST', 'https://oauth.hm.bb.com.br/oauth/token?grant_type=client_credentials&scope=cobrancas.boletos-requisicao', [
    'headers' => [
        'Content-Type' => 'application/x-www-form-urlencoded',
        'Authorization' => 'Basic DXlKcFpDSTZJamMxTjJGbUlpd2lZMjlrYVdkdlVIVmliR2xqWVdSdmNpSTZNQ3dpWTI5a2FXZHZVMjltZEhkaGNtVWlPakkyTkRNekxDSnpaWEYxWlc1amFXRnNTVzV6ZEdGc1lXTmhieUk2TVgwOmV5SnBaQ0k2SWpGaU1tRTROV010TjJFMU1TMDBZekU0TFRreVlXRXRNV1kxTnlJc0ltTnZaR2xuYjFCMVlteHBZMkZrYjNJaU9qQXNJbU52WkdsbmIxTnZablIzWVhKbElqb3lOalF6TXl3aWMyVnhkV1Z1WTJsaGJFbHVjM1JoYkdGallXOGlPakVzSW5ObGNYVmxibU5wWVd4RGNtVmtaVzVqYVdGc0lqb3hMQ0poYldKcFpXNTBaU0k2SW1odmJXOXNiMmRoWTJGdklpd2lhV0YwSWpveE5qTTVNRFE1TnpNeE5URTFmUQ=='      
    ],
    'verify' => false	
]);


echo "<pre>";
print_r($response->getBody()->getContents());exit;
