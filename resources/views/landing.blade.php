@extends('layouts.app')

@section('content')
LANDING PAGE

<div>
  @if ($shop)
    <div>Shop Title: {{ $shop['name'] }}</div>
    <div>Shop Email: {{ $shop['email'] }}</div>
    <div>Shop domain: {{ $shop['domain'] }}</div>
    <div>Shop province: {{ $shop['province'] }}</div>
    <div>Shop country: {{ $shop['country'] }}</div>
    <div>Shop address1: {{ $shop['address1'] }}</div>
    <div>Shop zip: {{ $shop['zip'] }}</div>
    <div>Shop phone: {{ $shop['phone'] }}</div>
  @endif
  @if (isset($error))
    <div>Error: {{$error}}</div>
  @endif
</div>
@endsection