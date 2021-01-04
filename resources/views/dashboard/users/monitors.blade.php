@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 205px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>المنذرين</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">المنذرين</a></li>
              <li class="breadcrumb-item active">عرض جميع المنذرين</li>
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
              <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <a style="display: inline" href="/user/create" class="btn btn-xs btn-primary">اضف جديد</a>

                  <div class="row">
                      <div class="col-sm-12 col-md-6">
                          <div class="dataTables_length" id="example1_length"> 
                             <label>Show <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label>
                             
                            </div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 201px;">الاسم </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 150.2px;"> البريد الالكتروني</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 150.2px;">الصورة الشخصية </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 244.2px;">الاجرائات </th>

    
                </tr></thead>
                <tbody>
                                                    
                <tr role="row" class="even">
                  <td class="sorting_1">احمد خالد </td>
                  <td> Hadi@gamil.com</td>
                    <td><img style="border-radius:50%" src="data:image/png;base64,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" max-width="100%" height="50px" alt=""></td>


                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      
                       
                      <form action="/user/edit" style="display :inline" method="POST">
                        <input type="hidden" name="_method" value="get">                            <input type="hidden" name="_token" value="q1IYy1nxUAD0ftlq6UVD31zVOsMZcjgumv9zXzon">                            <button style="margin-left:5px" type="submit" class="btn btn-xs btn-primary" name="edit" value="Delete">تعديل</button>

                        </form>

                        <form action="/user/show" style="display :inline" method="POST">
                          <input type="hidden" name="_method" value="get">                            <input type="hidden" name="_token" value="q1IYy1nxUAD0ftlq6UVD31zVOsMZcjgumv9zXzon">                            <button style="margin-left:5px" type="submit" class="btn btn-xs btn-info" name="edit" value="Delete">مشاهدة</button>
  
                          </form>
                     
                      
                       <form action="" style="display :inline" method="POST">
                 <input type="hidden" name="_method" value="delete">                            <input type="hidden" name="_token" value="q1IYy1nxUAD0ftlq6UVD31zVOsMZcjgumv9zXzon">                            <button type="submit" class="btn btn-xs btn-danger" name="delete" value="Delete">حذف</button>

                        </form>


                    </div>
                </td>
                  
                </tr>
                                            
                <tr role="row" class="even">
                    <td class="sorting_1">الهام سعيد </td>
                    <td> gehan@gamil.com</td>
                    <td><img style="border-radius:50%" src="data:image/png;base64,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" max-width="100%" height="50px" alt=""></td>


                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      
                     
                      <form action="/user/edit" style="display :inline" method="POST">
                        <input type="hidden" name="_method" value="get">                            <input type="hidden" name="_token" value="q1IYy1nxUAD0ftlq6UVD31zVOsMZcjgumv9zXzon">                            <button style="margin-left:5px" type="submit" class="btn btn-xs btn-primary" name="edit" value="Delete">تعديل</button>

                        </form>

                        <form action="/user/show" style="display :inline" method="POST">
                          <input type="hidden" name="_method" value="get">                            <input type="hidden" name="_token" value="q1IYy1nxUAD0ftlq6UVD31zVOsMZcjgumv9zXzon">                            <button style="margin-left:5px" type="submit" class="btn btn-xs btn-info" name="edit" value="Delete">مشاهدة</button>
  
                          </form>
                     
                      
                       <form action="" style="display :inline" method="POST">
                 <input type="hidden" name="_method" value="delete">                            <input type="hidden" name="_token" value="q1IYy1nxUAD0ftlq6UVD31zVOsMZcjgumv9zXzon">                            <button type="submit" class="btn btn-xs btn-danger" name="delete" value="Delete">حذف</button>

                        </form>


                    </div>
                </td>
                  
                </tr>
                
              

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