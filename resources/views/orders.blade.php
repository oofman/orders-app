@extends('layouts.app')
@section('content')

@if ($orders)
  Orders:
  <table border="1">
    <tr>
      <th>ID:</th>
      <th>Name:</th>
      <th>Items:</th>
      <th>tax:</th>
      <th>Price:</th>
      <th>Customer:</th>
    </tr>
    @if(isset($orders) && count($orders) > 0)
      @foreach ($orders as $order)
      <tr>
        <td>{{$order['id']}}</td>
        <td>{{$order['name']}}</td>
        <td>
          @foreach ($order['line_items'] as $item)
            <div>Name: {{$item['name']}}</div>
            <div>Quantity: {{$item['quantity']}}</div>
            <div>Price: {{$item['price']}}</div>
          @endforeach
        </td>
        <td>{{$order['current_total_tax']}}</td>
        <td>{{$order['total_price']}}</td>
        <td>
          @if(isset($order['customer']))
            Last Name: {{$order['customer']['last_name']}} <br/>
            First Name: {{$order['customer']['first_name']}} <br/>
            Email: {{$order['customer']['email']}}
          @endif
        </td>
      </tr>  
      @endforeach
    @endif
  </table>
@endif
@if (isset($error))
  <div>Error: {{$error}}</div>
@endif
@endsection