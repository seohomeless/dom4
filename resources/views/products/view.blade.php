@extends('layouts.main')

@section('content')
<div>
  <h2>{{ $product->title }}</h2>
  <p><small>art.</small> {{ $product->articul }}</p>
  <p>Price: ${{ priceFormat($product->price) }}</p>
  <hr />
  <p>
    Description:<br />
    {{ $product->description }}
  </p>
  <p>Category: {{ $product->category }}</p>
  <p>Vendor: {{ $product->vendor }}</p>
</div>  
@endsection
