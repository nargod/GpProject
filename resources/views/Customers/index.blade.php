@extends('layouts.app')

@section('title', '| 고객list')

@section('content')

    <div class="container">
        @include('layouts.menu')

        <div class="row">
            <div class="col-md-2">
                <img src="{{URL::asset('/image/test1.jpg')}}" class="img-responsive" >
            </div>
            <div class="col-md-10">
                <table class="table">
                    <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Number</th>
                    </thead>
                    <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <th>{{ $customer->id }}</th>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->number }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>
@endsection
