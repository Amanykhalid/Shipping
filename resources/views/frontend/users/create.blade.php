@extends('layouts.dashboard')
@section('content')

<div class="content-wrapper" style="min-height: 205px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>اضافة صفحة</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">الرئيسية</a></li>
              <li class="breadcrumb-item "><a href="/admin/users">  عرض جميع المستخدمين</a></li>
              <li class="breadcrumb-item ">اضافة مستخدم</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 style="float: right;" class="card-title">اضافة البيانات الاساسية</h3>
                </div>
                <!-- /.card-header -->
                
                <div class="card-body">
                  <div class="container">
                    <form class="form-horizontal" enctype="multipart/form-data" action="{{route('users.store')}}" method="post">
                        @method('post')
                        @csrf
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="control-label">اسم المستخدم </label>
                              <div>
                                <input  type="text" name="name"  class="form-control" id="inputName" >
                              </div>
                              @error("name")
                              <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="control-label">ايميل المستخدم </label>
                              <div>
                                <input  type="text" name="email"  class="form-control" id="inputName" >
                          
                              </div>
                              @error("email")
                              <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="control-label"> كلمة السر  </label>
                              <div >
                                <input  type="password" name="password" class="form-control" id="inputName" >
                              </div>
                              @error("password")
                              <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="control-label">  تاكيد كلمة السر  </label>
                              <div>
                                <input  type="password" name="confirm-password"  class="form-control" id="inputName" >
                             </div>
                             @error("confirm-password")
                             <span class="text-danger">{{$message}}</span>
                             @enderror
                            </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="form-label">حالة المستخدم</label>
                                <select name="status" id="select-beast" class="form-control  nice-select  custom-select">
                                    <option value="مفعل">مفعل</option>
                                    <option value="غير مفعل">غير مفعل</option>
                                </select>
                            </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="control-label"> صلاحية المستخدم </label>
                              <div>
                                {!! Form::select('roles_name[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                             </div>
                             @error("confirm-password")
                             <span class="text-danger">{{$message}}</span>
                             @enderror
                            </div>
                          </div>
                         
                        </div>

                      <div>
                        <input type="submit" value="اضافة " class="btn btn-block btn-xs btn-primary"> 
                      </div>

                    </form>
                  </div>
                </div>
  
                <!-- /.card-body -->
              </div>
         
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
@endsection