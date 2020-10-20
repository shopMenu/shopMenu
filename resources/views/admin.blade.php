@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @include('layouts.admin_nav')
            <div class="card">
                <div class="card-header">{{ __('နေ့စဉ်မှတ်တမ်း') }}</div>

            </div>
        </div>
    </div>
</div>
@endsection
