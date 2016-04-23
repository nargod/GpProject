@extends('layouts.master')

@section('title', '| 고객 List')

@section('content')
    <div class="container">
        @include('layouts.menu')
            @include('Customers.customer')
  	</div>
@endsection