@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @include('layouts.admin_nav')
            <a href="#"><div class="btn btn-sm btn-success mb-2">အော်ဒါအသစ်ထည့်မည်</div></a>
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-striped w-100">
                        <tr>
                            <th>စဉ်</th>
                            <th>စားပွဲ</th>
                            <th>အမည်</th>
                            <th>စျေးနှုန်း</th>
                            <th>စစ်ဆေး</th>
                            <td>Status</td>
                        </tr>
                        @for($i=1;$i<25; $i++)
                        <tr>
                            <td>1</td>
                            <td>10</td>
                            <td>ထမင်း</td>
                            <td>1500</td>
                            <td><a class="text-success">မှာမည်</a></td>
                            <td class="text-info">Processing</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>12</td>
                            <td>ထမင်း</td>
                            <td>1500</td>
                            <td><a class="text-danger">မယူပါ</a></td>
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
