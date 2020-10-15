@extends('layouts.app')
<style>
    body{
        background-image: url({{asset('/images/home.jpg')}});
        background-size: 100%;
        background-repeat: no-repeat;
    }
    #title{
        font-size: 100px;
        opacity: 80%;
        border-radius: 10%;
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="flex-center position-ref full-height">
            <div class="content text-center">
                <div class="title m-b-md">
                    <h1 id="title" class="text-white p-4 m-4 bg-info">Shop Menu</h1>
                </div>

                <div class="links">
                    <a href="/home" class="btn btn-info">ရရှိနိုင်သော အစားအစာများ</a>
                    @auth
                    <a href="/orders" class="btn btn-success">မှာယူထားသောစာရင်း</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
