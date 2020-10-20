@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @include('layouts.admin_nav')                
            <div class="card p-3">
                <div class="row">
                    @foreach($tables as $table)
                        <div class="col-md-2 col-4 p-2"><div class="btn btn-outline-info py-3 w-100">စားပွဲ - {{$table->table_name}}</div></div>
                    @endforeach
                </div>
            </div> 
            <form method="post" id="add-table">
                @csrf
                <input type="text" hidden value="{{$lastID->table_name + 1}}" name="addTable">
            </form>

        <a href="{{route('tables.store')}}"
        onclick="event.preventDefault(); document.getElementById('add-table').submit();" 
        >

        <div class="btn btn-success px-4 mt-2">စားပွဲ အသစ်လုပ်ရန်</div></a>
        <a class="float-right" href="{{url('admin/'.$lastID->id.'/destroy')}}">
        <div class="btn btn-danger px-4 mt-2">စားပွဲ ဖျက်ရန်</div></a>
        </div>
    </div>
</div>
@endsection
