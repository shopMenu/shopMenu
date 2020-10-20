@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @include('layouts.admin_nav')
            <div class="card p-2">
                <div class="row">
                    <div class="col">
                        <div class="btn btn-sm btn-success m-2 float-left">မီနူးအသစ်ထည့်မည်</div>
                        <div class="btn btn-sm btn-outline-info m-2 float-right">အမျိုးအစားအသစ်ထည့်မည်</div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col m-1 p-2 btn btn-outline-info">မနက်စာ</div>
                            <div class="col m-1 p-2 btn btn-outline-info">နေ့လည်စာ</div>
                            <div class="col m-1 p-2 btn btn-outline-info">ညစာ</div>
                            <div class="col m-1 p-2 btn btn-outline-info">ဖျော်ရည်</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="card">
                                    <img src="{{asset('/images/product.jpg')}}" alt="..." class="w-100">
                                    <div class="card-body">
                                      <h5 class="card-title">Card title<span class="m-2 badge badge-warning">5000</span></h5>
                                      <a href="#" class="btn btn-primary text-white">မှာယူမည်</a>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="card">
                                    <img src="{{asset('/images/product.jpg')}}" alt="..." class="w-100">
                                    <div class="card-body">
                                      <h5 class="card-title">Card title<span class="m-2 badge badge-warning">5000</span></h5>
                                      <a href="#" class="btn btn-primary text-white">မှာယူမည်</a>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="card">
                                    <img src="{{asset('/images/product.jpg')}}" alt="..." class="w-100">
                                    <div class="card-body">
                                      <h5 class="card-title">Card title<span class="m-2 badge badge-warning">5000</span></h5>
                                      <a href="#" class="btn btn-primary text-white">မှာယူမည်</a>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="card">
                                    <img src="{{asset('/images/product.jpg')}}" alt="..." class="w-100">
                                    <div class="card-body">
                                      <h5 class="card-title">Card title<span class="m-2 badge badge-warning">5000</span></h5>
                                      <a href="#" class="btn btn-primary text-white">မှာယူမည်</a>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
