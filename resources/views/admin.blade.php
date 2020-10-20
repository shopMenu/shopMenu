@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin') }}</div>
                @include('layouts.admin_nav')

            </div>
        </div>
    </div>
</div>
@endsection
