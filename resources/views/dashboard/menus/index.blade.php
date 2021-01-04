@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 205px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>القوائم</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">الرئيسية</a></li>
              <li class="breadcrumb-item active">عرض القوائم</li>
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
                  <div class="row">
                      <div class="col-sm-12 col-md-6">
                          <div class="dataTables_length" id="example1_length"> 
                             <label>Show <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label>
                             <a style="display: inline" href="/menus/create" class="btn btn-xs btn-primary">اضف جديد</a>
                            </div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 201px;">اسم القائمة</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 201px;">تابعة ل  </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 244.2px;">الاجرائات </th>

    
                </tr></thead>
                <tbody>
                                                    
                <tr role="row" class="even">
                  <td class="sorting_1">الخبر الاول</td>
                  <td class="sorting_1">حسين ياسين</td>

                  <td> <img src="https://www.hub-techs.com/uploads/slider_image/background_4.jpg?random=1609044627322" height="100px" width="100px" alt=""></td>
                  <td class="sorting_1">منذ 4 ساعات</td>

                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      
             <form action="user/edit" style="display :inline" method="POST">
                            <input type="hidden" name="_method" value="get">                            <input type="hidden" name="_token" value="q1IYy1nxUAD0ftlq6UVD31zVOsMZcjgumv9zXzon">                            <button style="margin-left:5px" type="submit" class="btn btn-xs btn-primary" name="edit" value="Delete">تعديل</button>
    
    
                            </form>

                         
                          
                           <form action="http://127.0.0.1:8000/admin/owners/1" style="display :inline" method="POST">
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



@endsection