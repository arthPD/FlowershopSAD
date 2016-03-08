@section('page-title')
	Inventory
@stop

@extends('admin-base')

@section('body')

	<div class="container-fluid">
  <h2 class="text-center">All Items</h2>
  <p class="text-center">The .table-striped class adds zebra-stripes to a table:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Flower Name</th>
        <th>Description</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
    @foreach($flowers as $flower)
	    @if($flower->price < 100)
        <tr class="danger">
      @else
        <tr class="success">
      @endif
  	     <td>{{ $flower->name }}</td>
  	     <td>{{ $flower->desc }}</td>
  	     <td>P {{ $flower->price }}</td>
	    </tr>
     @endforeach
  </table>
</div>

@stop
