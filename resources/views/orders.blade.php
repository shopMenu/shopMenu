@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('မှာယူထားသောစာရင်း') }}</div>

                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col m-1 p-2 btn btn-outline-info">မနက်စာ</div>
                        <div class="col m-1 p-2 btn btn-outline-info">နေ့လည်စာ</div>
                        <div class="col m-1 p-2 btn btn-outline-info">ညစာ</div>
                        <div class="col m-1 p-2 btn btn-outline-info">ဖျော်ရည်</div>
                    </div>
                    <div class="table-responsive">
                    <table class="table table-striped w-100">
                        <tr>
                            <th>စဉ်</th>
                            <th>အမည်</th>
                            <th>စျေးနှုန်း</th>
                            <th>Date</th>
                            <td>Status</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>ထမင်း</td>
                            <td>1500</td>
                            <td><a class="text-success">29-12-2020</a></td>
                            <td class="text-info">Processing</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>ထမင်း</td>
                            <td>1500</td>
                            <td><a class="text-success">1-1-2020</a></td>
                            <td>Done</td>
                        </tr>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
