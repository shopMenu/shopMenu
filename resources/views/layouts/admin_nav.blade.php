<div class="card-body">
     <div class="row mb-2">
     <a href="{{url('admin/tables')}}"><div class="{{(Request()->is('admin/tables')) ? "active" : ""}} col m-1 p-2 btn btn-outline-info">စားပွဲများ</div></a>
         <a href="{{url('admin/orders')}}"><div class="{{(Request()->is('admin/orders')) ? "active" : ""}} col m-1 p-2 btn btn-outline-info">အော်ဒါများ</div></a>
         <a href="{{url('admin/menus')}}"><div class="{{(Request()->is('admin/menus')) ? "active" : ""}} col m-1 p-2 btn btn-outline-info">မီနူးစာရင်း</div></a>
         <a href="{{url('admin/staff')}}"><div class="{{(Request()->is('admin/staff')) ? "active" : ""}} col m-1 p-2 btn btn-outline-info">ဝန်ထမ်းများ</div></a>
     </div>

 </div>