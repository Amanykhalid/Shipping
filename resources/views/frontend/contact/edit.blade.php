@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 205px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>تعديل اتصال</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
              <li class="breadcrumb-item "><a href="/admin/contact"> عرض جميع الاتصالات</a></li>
              <li class="breadcrumb-item ">تعديل اتصال</li>
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
                  <h3 style="float: right;" class="card-title">تعديل البيانات الاساسية</h3>
                </div>
                <!-- /.card-header -->
                
                <div class="card-body">
                  <div class="container">
                    <form class="form-horizontal" enctype="multipart/form-data" action="{{route('contact.update',$contact->id)}}" method="post">
                        @method('put')
                        @csrf
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="control-label"> الاسم  </label>
                              <div>
                                <input  type="text" name="name" value="{{$contact->name}}"  class="form-control" id="inputName" >
                              </div>
                              @error("name")
                              <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="control-label">الايميل </label>
                              <div>
                                <input  type="text" name="email" value="{{$contact->email}}"  class="form-control" id="inputName" >
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
                              <label for="inputName" class="control-label"> الموبايل</label>
                              <div>
                                <input  type="text" name="mobile" value="{{$contact->mobile}}" class="form-control" id="inputName" >
                              </div>
                              @error("mobile")
                              <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputEmail" class="control-label"> الرسالة</label>
                          <div>
                              <textarea name="massage" class="textarea" id="" cols="30" rows="10">
                                {{$contact->massage}}
                              </textarea>
                          </div>
                          @error("massage")
                              <span class="text-danger">{{$message}}</span>
                          @enderror
                      </div>
                      <div >
                        <input type="submit" value="تعديل " class="btn btn-block btn-xs btn-primary"> 
                    </div>
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