@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 205px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>التقارير</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
              <li class="breadcrumb-item active">التقارير</li>
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
                              
                            </div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter">  </div></div></div><div class="row"><div class="col-sm-12">
                                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                    <thead>
                        <div class="row">
                        <div class="col-2">
                            <input type="text" placeholder="صاحب التذكرة" class="form-control">
                        </div>
                        <div class="col-2">
                            <input style="display: inline" type="text" placeholder="اسم المشرف" class="form-control">
                        </div>
                        <div class="col-2">
                            <select name="" class="form-control" id="">
                                <option >اختر التنصيف</option>
                                <option >اجتماعي</option>
                                <option >اقتصادي</option>

                            </select>
                        </div>
                        <div class="col-2">
                            <select name="" class="form-control" id="">
                                <option >اختر المحافظة</option>
                                <option >القدس</option>
                                <option >رام الله</option>
                                <option >الخليل</option>
                                <option >جنين</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <select name="" class="form-control" id="">
                                <option >حالة التذكرة </option>
                                <option >مرتفعة</option>
                                <option >متوسطة</option>
                                <option >عادية</option>
                            </select>
                        </div>
                        </div>
                        <br>
                        
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-2">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">من</span>
                                    </div>
                                    <input type="date" class="form-control" placeholder="Username">
                                  </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">الى</span>
                                    </div>
                                    <input type="date" class="form-control" placeholder="Username">
                                  </div>
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn  bg-gradient-primary  class="form-control""><i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                                      </div>


                        </div>
                      

                    </div>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 201px;">عنوان التذكرة </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 201px;">تاريخ الانشاء</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 50px;">الاولوية </th>
        
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 244.2px;">الاجراءات </th>
        
            
                        </tr></thead>
                        <tbody>
                                                            
                        <tr role="row" class="even">
                          <td class="sorting_1">عنف اسري</td>
                          <td class="sorting_1">16-12-2020</td>
        
                          <td> <button style="width: 100px;display:inline" class="btn btn-block btn-danger">مرتفعة</button> </td>
        
                          <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <form action="/tickets/show" style="display :inline" method="POST">
                                    <input type="hidden" name="_method" value="get">
                                     <input type="hidden" name="_token" value="q1IYy1nxUAD0ftlq6UVD31zVOsMZcjgumv9zXzon">
                                      <button style="margin-left:5px" type="submit" class="btn btn-xs btn-info" name="edit" value="Delete">مشاهدة التفاصيل</button>
                                    </form>
                                   <form action="" style="display :inline" method="POST">
                                    <input type="hidden" name="_method" value="get">  
                                      <input type="hidden" name="_token" value="q1IYy1nxUAD0ftlq6UVD31zVOsMZcjgumv9zXzon">
                                      <button style="margin-left:5px" type="submit" class="btn btn-xs btn-primary" name="edit" value="Delete">تعديل</button>
                                    </form>
                                
                                   <form action="" style="display :inline" method="POST">
                             <input type="hidden" name="_method" value="delete">
                              <input type="hidden" name="_token" value="q1IYy1nxUAD0ftlq6UVD31zVOsMZcjgumv9zXzon">                           
                              <button type="submit" class="btn btn-xs btn-danger" name="delete" value="Delete">حذف</button>
                                    </form>
        
        
                            </div>
                        </td>
                          
                        </tr>
                                                    
                     
                        
                      
        
                    </tbody>
                        <tfoot>
                        </tfoot>
                                    </table>
          
                    


@endsection