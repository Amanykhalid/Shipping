@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 205px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>الاتصالات</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
              <li class="breadcrumb-item active">عرض جميع الاتصالات</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

      <div class="row">
        <div class="col-12">
          @include('frontend.includes.alerts.success')
          @include('frontend.includes.alerts.errors')
          <div class="card">
         
            <!-- /.card-header -->
            <div class="card-body">
              <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                
                      <div class="col-sm-12 col-md-6">
                        @can('اضافة اتصال')
                        <a style="display: inline" href="/admin/contact/create" class="btn btn-xs btn-primary">اضف اتصال</a>
                        @endcan
                          <div class="dataTables_length" id="example1_length"> 
                             <label>Show <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label>
                            
                            </div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 201px;"> الاسم </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 150.2px;"> الايميل</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 150.2px;"> الرسالة</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 150.2px;"> الحالة</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 244.2px;">الاجرائات </th>

    
                </tr></thead>
                <tbody>
                 @foreach($contacts as $contact)                                   
                <tr role="row" class="even">
                  <td class="sorting_1">{{$contact->name}}</td>
                  <td class="sorting_1">{{$contact->email}}</td>
                  <td class="sorting_1">{{$contact->massage}}</td>
                  <td>{{ $contact->status == 1 ? 'مفعل'  : 'غير مفعل' }}</td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      @can('تعديل اتصال')
                      <a href="{{route('contact.edit',$contact->id)}}" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>
                      @endcan
                      @can('حذف اتصال')
                     <form action="{{route('contact.destroy',$contact->id)}}" style="display :inline" method="POST">
                     @method('delete')
                     @csrf
                      <button type="submit" class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1" name="delete" value="Delete">حذف</button>
                      </form>
                      @endcan
                      @can('تغير حالة اتصال')
                      <a href="{{route('contact.status',$contact->id)}}" class="btn btn-outline-warning btn-min-width box-shadow-3 mr-1 mb-1">
                        @if($contact ->status == 0)
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



@endsection