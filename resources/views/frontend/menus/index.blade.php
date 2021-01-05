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
            <a style="display: inline" href="/admin/menu/create" class="btn btn-xs btn-primary">اضف قائمة</a>

            <!-- /.card-header -->
            <div class="card-body">
              
              @include('frontend.includes.alerts.success')
              @include('frontend.includes.alerts.errors')

              <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                      <div class="col-sm-12 col-md-6">
                          <div class="dataTables_length" id="example1_length"> 
                             <label>Show 
                              <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                              </select>
                              entries
                            </label>
                            </div>
                          </div>
                          <div class="col-sm-12 col-md-6">
                            <div id="example1_filter" class="dataTables_filter">
                              <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                              <tr role="row">
                                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 201px;">اسم القائمة</th>
                                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 201px;"> اللغة  </th>
                                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 201px;"> النوع  </th>
                                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 150px;"> الحالة  </th>
                                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 300.2px;">الاجرائات </th>
                  
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($menus as $menus)
                              <tr role="row" class="even">
                                <td class="sorting_1">{{$menus->name}}</td>
                                <td class="sorting_1"> {{$menus->lang}}</td>
                                <td class="sorting_1">{{$menus->type}}</td>
                                <td class="sorting_1"> {{$menus->status== 1 ? 'مفعل'  : 'غير مفعل' }}</td>
                                <td>
                                  <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{route('menu.edit',$menus->id)}}" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>
                                      <form action="{{route('menu.destroy',$menus->id)}}" style="display :inline" method="POST">
                                        @method('delete')
                                        @csrf
                                          <button type="submit" class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1" name="delete" value="Delete">حذف</button>
                                      </form>
                                      <a href="{{route('menu.status',$menus->id)}}" class="btn btn-outline-warning btn-min-width box-shadow-3 mr-1 mb-1">
                                        @if($menus ->status == 0)
                                        تفعيل
                                        @else
                                        الغاء تفعيل
                                        @endif
                                      </a>
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



@endsection