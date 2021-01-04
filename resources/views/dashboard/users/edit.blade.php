@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 205px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>تعديل </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">الرئيسية</a></li>
              <li class="breadcrumb-item "><a href="">المستخدمين</a></li>
              <li class="breadcrumb-item ">تعديل عضو </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          @if (count($errors) > 0)
          <div class="alert alert-info">
           <button type="button" class="close" data-dismiss="alert">×</button>
           <ul>
            @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
            @endforeach
           </ul>
          </div>
         @endif
         @if ($message = Session::get('success'))
         <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
                 <strong>{{ $message }}</strong>
         </div>
         @endif
            <div class="card card-primary">
                <div class="card-header">
                  <h3 style="float: right;" class="card-title"> تعديل</h3>
                </div>
                <!-- /.card-header -->
                
                <div class="card-body col-7">
                  
                    <form class="form-horizontal" action="" method="post">
                        @method('post')
                        @csrf
                      <div class="form-group">
                        <label for="inputName" class="col-sm-4 control-label">الاسم</label>

                        <div class="col-sm-10">
                          <input  type="text" name="name" class="form-control" id="inputName" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-4 control-label">الاسم الظاهر</label>

                        <div class="col-sm-10">
                       <input type="text" name="username"  class="form-control">

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" class="col-sm-4 control-label">البريد الالكتروني</label>

                        <div class="col-sm-10">
                          <input  type="text" name="email" class="form-control" id="inputName" >
                        </div>
                      </div>
                   
                      <div class="form-group">
                        <label for="password" class="col-sm-4 control-label">كلمة المرور</label>

                        <div class="col-sm-10">
                          <input  type="password" name="password" class="form-control" id="password" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputSkills" class="col-sm-4 control-label">تابع الصلاحيات</label>

                        <div class="col-sm-10">
                          <select name="user_type" class="form-control" id="">
                            <option value="admin">اداري</option>
                            <option value="supervisor">مشرف</option>
                            <option value="monitor">منذر</option>
                          </select>
                        </div>
                      </div>
                 
                      <div class="col-sm-10">
                        <input type="submit" value="اضافة " class="btn btn-xs btn-primary"> 
                    </div>
                    </div>
                      

                    
                    </form>
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