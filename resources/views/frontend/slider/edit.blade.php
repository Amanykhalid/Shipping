@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 205px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>تعديل سلايدر</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
              <li class="breadcrumb-item "><a href="/admin/sliders">عرض جميع السلايدرات</a></li>
              <li class="breadcrumb-item ">تعديل سلايدر</li>
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
                  <h3 style="float: right;" class="card-title">تعديل سلايدر</h3>
                </div>
                <!-- /.card-header -->
                
                <div class="card-body">
                  <div class="container">
                        <form class="form-horizontal" enctype="multipart/form-data" action="{{route('sliders.update',$slider->id)}}" method="post">
                              @method('put')
                              @csrf
                              <input type="text"value="sliderId" name="sliderId" hidden>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="inputName" class="control-label">اللغة </label>
                                    <div>
                                      <select name="lang" class="form-control" id="">
                                        @foreach ($langs as $lang)
                                        <option value="{{$lang->code}}" @if($slider->lang==$lang->code) selected @endif> {{$lang->name}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                    @error("lang")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="inputName" class="control-label">عنوان السلادير </label>
                                    <div>
                                      <input  type="text" name="title" value="{{$slider->title}}" class="form-control" id="inputName" >
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
                                      <input  type="text" name="link" value=" {{$slider->link}}" class="form-control" id="inputName" >
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="inputSkills" class="control-label">صورة السلايدر</label>
                                    <div>
                                      <input   name="image" type="file"  class="form-control"  >
                                      <img src="{{asset('images/'.$slider->image)}}" style="height: 200px; with:200px" alt="slider">
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputEmail" class="control-label">وصف قصيف</label>
                                <div>
                                    <textarea name="description" class="textarea" id="" cols="30" rows="10">
                                      {{$slider->description}}
                                    </textarea>
                                </div>
                                @error("description")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                            
                              <div class="offset-md-1 col-sm-10">
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