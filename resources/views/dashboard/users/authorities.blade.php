@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 205px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>جهات الاختصاص</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">الرئيسية</a></li>
              <li class="breadcrumb-item ">المستخدمين </li>
              <li class="breadcrumb-item active">جهات الاختصاص </li>

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
                             {{--  <a style="display: inline" href="/menus/create" class="btn btn-xs btn-primary">اضف جديد</a>  --}}
                            </div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 100px;">اسم الجهة  </th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 100px;">البريد اللكتروني </th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 100px;">المحافظة </th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 100px;">شعار الجهة</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 244.2px;">الاجراءات </th>

    
                </tr></thead>
                <tbody>
                                                    
                <tr role="row" class="even">
                  <td class="sorting_1">UNDP</td>
                  <td class="sorting_1">undp@gmail.com</td>
                  <td class="sorting_1"> الخليل </td>

                  <td> <img style="border-radius:50%;height:50px;width:80px" src="data:image/png;base64,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" height="100px" width="100px" alt=""></td>

                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      
                           <form action="/auth/create" style="display :inline" method="POST">
                            <input type="hidden" name="_method" value="get">                            <input type="hidden" name="_token" value="q1IYy1nxUAD0ftlq6UVD31zVOsMZcjgumv9zXzon">                            <button style="margin-left:5px" type="submit" class="btn btn-xs btn-info" name="edit" value="Delete">اضافة عضو</button>
    
                            </form>
                            <form action="/auth/edit" style="display :inline" method="POST">
                                <input type="hidden" name="_method" value="get">                            <input type="hidden" name="_token" value="q1IYy1nxUAD0ftlq6UVD31zVOsMZcjgumv9zXzon">                            <button style="margin-left:5px" type="submit" class="btn btn-xs btn-primary" name="edit" value="Delete">تعديل </button>
        
                                </form>
                                <form action="/users/auth" style="display :inline" method="POST">
                                    <input type="hidden" name="_method" value="get">                            <input type="hidden" name="_token" value="q1IYy1nxUAD0ftlq6UVD31zVOsMZcjgumv9zXzon">                            <button style="margin-left:5px" type="submit" class="btn btn-xs btn-warning" name="edit" value="Delete"> جميع الاعضاء   </button>
            
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