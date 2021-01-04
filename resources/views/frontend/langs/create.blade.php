@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 205px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>اضف لغة</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">الرئيسية</a></li>
              <li class="breadcrumb-item "><a href="/admin/langs">اللغات</a></li>
              <li class="breadcrumb-item ">اضافة  لغة جديدة </li>
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
                  <h3 style="float: right;" class="card-title">اضافة  لغة</h3>
                </div>
                <!-- /.card-header -->
                
                <div class="card-body">
                  <div class="container">
                      <form class="form-horizontal" enctype="multipart/form-data" action="{{route('langs.store')}}" method="post">
                            @method('post')
                            @csrf
                          <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="inputName" class="control-label">الاسم</label>
                                  <div>
                                    <input  type="text" name="name" class="form-control" id="inputName" >
                                  </div>
                                  @error("name")
                                  <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                              </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="inputEmail" class="control-label">الاتجاه</label>
                                <div>
                                  <select name="dir"  class="form-control">
                                    <option value="rtl">من اليمين الي اليسار</option>
                                    <option value="ltr">من اليسار الي اليمين</option>
                                  </select>
                                </div>
                                @error("dir")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                            </div>
                          </div> 
                        
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="inputName" class="control-label">الرمز</label>
                                <div>
                                  <input  type="text" name="code" class="form-control" id="inputName" >
                                </div>
                                @error("code")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="inputSkills" class="control-label">الايقونة</label>
                                <div>
                                  <input   name="flag" type="file"  class="form-control"  >
                                </div>
                                @error("flag")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-3">
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