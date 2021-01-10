@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 205px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>اللغات</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
              <li class="breadcrumb-item active">عرض جميع اللغات</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
      

          <div class="card">

            <!-- /.card-header -->
            <div class="card-body">
              @include('frontend.includes.alerts.success')
              @include('frontend.includes.alerts.errors')
              @can('اضافة لغة')
              <a style="display: inline" href="/admin/langs/create" class="btn btn-xs btn-primary">اضف لغة</a>
              @endcan

              <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                      <div class="col-sm-12 col-md-6">
                          <div class="dataTables_length" id="example1_length"> 
                             <label>Show <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label>
                             {{--  <button ></button>  --}}
                            </div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 201px;">اللغة </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 150.2px;"> الكود</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 150.2px;">الاتجاه </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 150.2px;">الحالة </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 244.2px;">الاجرائات </th>

    
                </tr></thead>
                <tbody>
                  @foreach ($allLang as $Lang)
                  <tr role="row" class="even">
                    <td class="sorting_1">{{$Lang->name}}</td>
                    <td> {{$Lang->code}}</td>
                    <td>{{$Lang->dir}}</td>
                    <td>{{ $Lang->status == 1 ? 'مفعل'  : 'غير مفعل' }}</td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example"> 
                        @can('تعديل لغة')
                        <a href="{{route('langs.edit',$Lang->id)}}"class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>
                        @endcan
                        @can('حذف لغة')
                        <form action="{{route('langs.destroy',$Lang->id)}}" style="display :inline" method="POST">
                          @method('delete')
                          @csrf
                           <button type="submit" class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1" name="delete" value="Delete">حذف</button>
                        </form>
                        @endcan
                        @can('تعديل حالة لغة')
                        <a href="{{route('langs.status',$Lang->id)}}" class="btn btn-outline-warning btn-min-width box-shadow-3 mr-1 mb-1">
                          @if($Lang ->status == 0)
                          تفعيل
                          @else
                          الغاء تفعيل
                          @endif
                        </a>
                        @endcan
                        
                      </div>
                    </td>
                  </tr>
                  @endforeach   
                </tbody>
                <tfoot>
               
            
            <!-- /.card-body -->
          
          <!-- /.card -->
        
        <!-- /.col -->
      
      <!-- /.row -->
    
    <!-- /.content -->
  
    
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->

<!-- ./wrapper -->

<!-- jQuery -->
<script src="http://127.0.0.1:8000/dashboard/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="http://127.0.0.1:8000/dashboard/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 rtl -->
<script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://127.0.0.1:8000/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="http://127.0.0.1:8000/dashboard/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="http://127.0.0.1:8000/dashboard/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="http://127.0.0.1:8000/dashboard/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="http://127.0.0.1:8000/dashboard/plugins/jqvmap/maps/jquery.vmap.world.js"></script>
<!-- jQuery Knob Chart -->
<script src="http://127.0.0.1:8000/dashboard/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="http://127.0.0.1:8000/dashboard/plugins/moment/moment.min.js"></script>
<script src="http://127.0.0.1:8000/dashboard/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="http://127.0.0.1:8000/dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="http://127.0.0.1:8000/dashboard/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="http://127.0.0.1:8000/dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="http://127.0.0.1:8000/dashboard/dist/js/adminlte.js"></script>
<script src="http://127.0.0.1:8000/dashboard/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://127.0.0.1:8000/dashboard/dist/js/demo.js"></script>
<script>let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

  elems.forEach(function(html) {
      let switchery = new Switchery(html,  { size: 'small' });
  });


  $(document).ready(function(){
    $('.js-switch').change(function () {
        let status = $(this).prop('checked') === true ? 1 : 0;
        let userId = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: 'http://127.0.0.1:8000/admin/user/status/update',
            data: {'status': status, 'user_id': userId},
            success: function (data) {
                console.log(data.message);
            }
        });
    });
});
$(document).ready(function(){
    $('.js-switch').change(function () {
        let status = $(this).prop('checked') === true ? 1 : 0;
        let userId = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: 'http://127.0.0.1:8000/admin/owner/status/update',
            data: {'status': status, 'user_id': userId},
            success: function (data) {
                console.log(data.message);
            }
        });
    });
});

</script>
<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
        $(".btn-danger").click(function(){ 

          $(this).parents(".hdtuto control-group lst").remove();
      });
    });
    $(document).ready(function () { 
        $('#category').on('change',function(e){
  
        var cat_id = e.target.value;
    
        
        $.get('/ajax-subcat?cat_id='+ cat_id,function(data){
            //success data
             subcat =  $('#subcategory').empty();
          $.each(data,function(create,subcatObj){
                var option = $('<option/>', {id:create, value:subcatObj});
                subcat.append('<option value ="'+subcatObj.name+'">'+subcatObj.name+'</option>');
            });
        });
    });
});

</script>



</tfoot></table></div></div></div></div></div></div></div></section></div>
@endsection