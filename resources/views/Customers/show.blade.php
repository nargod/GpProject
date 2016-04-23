@extends('layouts.app')

@section('content')
    <div class="page-header">
        ...
    </div>

    <br/>
    <h2>customers:</h2>
    @foreach($customers as $customer)
        <p> {{ $customer->id }}: {{ $customer->name }}</p>
    @endforeach

@stop