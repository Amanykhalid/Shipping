@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 1233.2px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>الملف الشخصي</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">الملف الشخصي</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="{{ asset('dashboard/dist/img/user1-128x128.jpg') }}" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">احمد جهاد</h3>

                <p class="text-muted text-center">الجنس : ذكر</p>
                <p class="text-muted text-center">الصلاحية : اداري</p>

              



           

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
       
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">

                <ul class="nav nav-pills">
                   
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                
                    <div class="tab-content p-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                  <div class="tab-pane active" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">اسم المستخدم</label>

                        <div class="col-sm-10">
                          <input value="لمى عيسى" disabled class="form-control" id="inputName">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">البريد الالكتروني</label>

                        <div class="col-sm-10">
                          <input value="samia@gamil.com	" disabled class="form-control" id="inputName">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName2" class="col-sm-2 control-label">الهاتف المحمول</label>

                        <div class="col-sm-10">
                          <input value="06541744" disabled class="form-control" id="inputName">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputSkills" class="col-sm-2 control-label">العنوان التفصيلي</label>

                        <div class="col-sm-10">
                          <input value="فلسطين , غزة , شارع النصر , بالقرب من مدرسة .."  disabled class="form-control" id="inputName">
                        </div>
                      </div>

                    
                    </form>
                  </div>
                        </div>
                        <div class="tab-pane fade show " id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 201px;">عنوان التذكرة </th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 201px;">تاريخ الانشاء</th>
    
    
        
                    </tr></thead>
                    <tbody>
                                                        
                    <tr role="row" class="even">
                      <td class="sorting_1"><a href="/tickets/show">عنف اسري</a></td>
                      <td class="sorting_1">16-12-2020</td>
    
                   
                      
                    </tr>
                                                
                 
                    
                  
    
                </tbody>
                    <tfoot>
                   
                
        
    </tfoot></table> 
                        </div>
                    </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    
@endsection