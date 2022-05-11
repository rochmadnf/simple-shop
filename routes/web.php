<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('main');
});

Route::get('/getData', function () {
  $client = new GuzzleHttp\Client();
  $response = $client->request('GET', 'https://api.kedasbeautymember.com/public/api/products');

  return json_decode($response->getBody());
});
