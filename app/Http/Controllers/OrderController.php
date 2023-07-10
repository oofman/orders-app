<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $queryParams = [
        'financial_status=paid'
      ];
      $query = 'orders';
      $fields = 'id,name,line_items,total_price,current_total_tax,customer';
      $response = shopifyRequest('get', $query, $queryParams, $fields);
      
      if($response->successful()){
        $error = false;
        $orders = $response->json()[$query];
      }else{
        $orders = null;
        $error = 'There was an error connecting to your Shop.';
      }
      
      return view('orders',[
        'orders'=>$orders,
        'error'=>$error,
      ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
