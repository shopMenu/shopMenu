@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('layouts.admin_nav')
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-striped w-100">
                        <tr>
                            <th>စဉ်</th>
                            <th>စားပွဲ</th>
                            <th>အမည်</th>
                            <th>စျေးနှုန်း</th>
                            <th>Date</th>
                            <td>Status</td>
                        </tr>
                        @for($i=1;$i<25; $i++)
                        <tr>
                            <td>1</td>
                            <td>10</td>
                            <td>ထမင်း</td>
                            <td>1500</td>
                            <td><a class="text-success">29-12-2020</a></td>
                            <td class="text-info">Processing</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>12</td>
                            <td>ထမင်း</td>
                            <td>1500</td>
                            <td><a class="text-success">1-1-2020</a></td>
                            <td>Done</td>
                        </tr>
                        @endfor
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
