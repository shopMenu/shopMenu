@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @include('layouts.admin_nav')                
            <div class="card p-3">
                <div class="row">
                    @for($i=1;$i<25; $i++)
                        <div class="col-md-2 col-4 my-3"><div class="btn btn-info w-100">{{$i}}</div></div>
                    @endfor
                </div>
            </div> 
            <div class="btn btn-success px-4 mt-2">+</div>
            <div class="btn btn-danger px-4 mt-2">-</div>
        </div>
    </div>
</div>
@endsection
