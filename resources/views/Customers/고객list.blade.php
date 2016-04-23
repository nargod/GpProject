@extends('layouts.master')

@section('content')

    <div class="container">
        @include('layouts.menu')
        <div class="row">

            <div class="col-md-9">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{URL::asset('/image/test1.jpg')}}" class="img-responsive" >
                        </div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-5">
                                    @foreach($customers as $customer)
                                        <p>{{$customer -> name}}</p>
                                    @endforeach

                                </div>
                                <div class="col-md-4">
                                    <h4>최근 진료 동물 : 개</h4>
                                </div>
                                <div class="col-md-3">
                                    <h4>고객 No. 00000</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <h4>연락처 : 010- 1111- 1111</h4>
                                </div>
                                <div class="col-md-5">
                                    <h4>최근 진료 일   yyyy.mm.dd</h4>
                                </div>
                            </div>
                            <div class="row col-md-offset-7">
                                <button type="button" class="btn btn-primary">예방접종</button>
                                <button type="button" class="btn btn-primary">일반진료</button>
                                <button type="button" class="btn btn-primary">상세보기</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
