<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $queryParams = [];
        $query = 'shop';
        $response = shopifyRequest('get', $query, $queryParams );
        
        if($response->successful()){
          $error = false;
          $shop = $response->json()[$query];
        }else{
          $shop = null;
          $error = 'There was an error connecting to your Shop.';
        }
        
        return view('landing',[
          'shop'=>$shop,
          'error'=>$error,
        ]);
    }
}
