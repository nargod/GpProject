@extends('layouts.master')

@section('title', '| 고객list')

@section('content')

    <div class="container">
    
        @foreach($customers as $customer)
        <div class="panel panel-default">
        <div class="row">
            <div class="col-md-2">
                <img src="{{ asset("image/$customer->Photo") }}" class="img-responsive" >
            </div>
            <div class="col-md-10">
                <table class="table">

                    <tbody>
                        <tr>
                            <td><h5>고객이름 :  </h5>{{ $customer->name }}</td>
                            <td><h5>연락처 :  </h5>{{ $customer->number }}</td>
                            <td><h5>고객번호 : </h5>1111</td>
                        </tr>
                        <tr>
                            <td><h5>고객번호 :  </h5>{{ $customer->number }}</td>
                            <td><h5>최근진료일 :  </h5>2014-15-11</td>
                            <td>
                                <div class="row col-md-offset-6">
                                    <button type="button" class="btn btn-primary" >예방접종</button>
                                    <button type="button" class="btn btn-primary">일반진료</button>
                                    <button type="button" class="btn btn-primary">상세보기</button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div> <!--End of col -->
            </div> <!--End of Panel -->
        </div>


        @endforeach
        <div class="text-center">
            {!! $customers->appends(Request::except('page'))->render() !!}
        </div>
    </div>
@endsection
