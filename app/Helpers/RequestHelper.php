<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;


function shopifyRequest($httpMethod, $url, $query_params = [], $fields = null, $body = null)
{
    $request = Http::withHeaders([
      'X-Shopify-Access-Token' => $_ENV['AccessToken'],
      'Content-Type', 'application/json'
    ]);

    $version = $_ENV['Version'];

    $params = '';
    if ($fields){
      array_push($query_params,'fields=' . $fields);
    }
    if (count($query_params) > 0){
      $params = '?' . implode('&',$query_params);
    }
    
    $url = 'https://' . $_ENV['ShopId'] . '.myshopify.com/admin/api/' . $version . '/' . $url . '.json' . $params;
    switch ($httpMethod) {
        case "get":
            return $request->get($url);
            break;
        case "put":
            return $request->put($url);
            break;
        case "post":
            return $request->post($url);
            break;
        case "delete":
            return $request->delete($url);
            break;
    }
}