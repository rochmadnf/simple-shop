<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public $products = [];
  public function all($toArray = false)
  {
    $client = new Client();
    $response = $client->request('GET', 'https://api.kedasbeautymember.com/public/api/products');

    return json_decode($response->getBody(), $toArray);
  }

  public function search(Request $request)
  {
    collect($this->all(true))->filter(fn ($product) => str(strtolower($product["name"]))->contains($request->keyword))->map(fn ($product) => array_push($this->products, $product));
    return $this->products;
  }
}
