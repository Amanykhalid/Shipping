@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 205px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>اضافة سلايدر</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
              <li class="breadcrumb-item "><a href="/admin/sliders"> عرض جميع سلايدرات</a></li>
              <li class="breadcrumb-item ">اضافة سلايدر</li>
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
                  <h3 style="float: right;" class="card-title">اضافة سلايدر</h3>
                </div>
                <!-- /.card-header -->
                
                <div class="card-body">
                  <div class="container">
                    <form class="form-horizontal" enctype="multipart/form-data" action="{{route('sliders.store')}}" method="post">
                        @method('post')
                        @csrf
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="control-label">اللغة </label>
                              <div>
                                <select name="lang" class="form-control" id="">
                                  @foreach ($langs as $item)
                                    <option value="{{$item->code}}">{{$item->name}}</option>
                                  @endforeach
                                </select>
                                @error("lang")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
    
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="control-label">عنوان السلادير </label>
                              <div>
                                <input  type="text" name="title"  class="form-control" id="inputName" >
                              </div>
                              @error("title")
                              <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>
    
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="control-label">رابط الbutton الاول </label>
                              <div>
                                <input  type="text" name="link" value="" class="form-control" id="inputName" >
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputSkills" class="control-label">صورة السلايدر</label>
                              <div>
                                <input   name="image" type="file"  class="form-control"  >
                              </div>
                              @error("image")
                              <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputEmail" class="control-label">وصف قصيف</label>
                          <div>
                              <textarea name="description" class="textarea" id="" cols="30" rows="10"></textarea>
                          </div>
                          @error("description")
                              <span class="text-danger">{{$message}}</span>
                              @enderror
                      </div>
                     
                      
                    
                
                      
                 
                      <div >
                        <input type="submit" value="اضافة " class="btn btn-block btn-xs btn-primary"> 
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