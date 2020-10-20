@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @include('layouts.admin_nav')
            <a href="#"><div class="btn btn-sm btn-success mb-2">ဝန်ထမ်းအသစ်ထည့်မည်</div></a>
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-striped w-100">
                        <tr>
                            <th>စဉ်</th>
                            <th>အမည်</th>
                            <th>ဖုန်းနံပါတ်</th>
                            <th>လိပ်စာ</th>
                            <td>Status</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>အောင်အောင်</td>
                            <td>09455545455</td>
                            <td><a class="text-success">အမှတ်(15)၊ရန်ကုန်၊</a></td>
                            <td class="text-info">Waiter</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ko ye</td>
                            <td>09455545455</td>
                            <td><a class="text-success">အမှတ်(15)၊ရန်ကုန်၊</a></td>
                            <td class="text-info">Accountant</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Ma Aye</td>
                            <td>09455545455</td>
                            <td><a class="text-success">အမှတ်(15)၊ရန်ကုန်၊</a></td>
                            <td class="text-info">Manager</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Ko aung</td>
                            <td>09455545455</td>
                            <td><a class="text-success">အမှတ်(15)၊ရန်ကုန်၊</a></td>
                            <td class="text-info">Boss</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
