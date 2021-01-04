@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 205px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>تعديل لغة</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
              <li class="breadcrumb-item "><a href="">اعدادت الواجهة الامامية</a></li>
              <li class="breadcrumb-item ">تعديل لغة</li>
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
                  <h3 style="float: right;" class="card-title">تعديل لغة</h3>
                </div>
                <!-- /.card-header -->
                
                <div class="card-body">
                  <div class="container">
                    <form class="form-horizontal" enctype="multipart/form-data" action="{{route('langs.update',$lang->id)}}" method="post">
                        @method('put')
                        @csrf
                        <input type="text" name="LangId" hidden>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="ontrol-label"> اتجاه اللغة </label>
                              <div>
                                <select name="dir" class="form-control" id="">
                                  <option value="rtl" @if($lang->dir=="rtl") selected @endif> من اليمين الى اليسار</option>
                                  <option value="ltr" @if($lang->dir=="ltr") selected @endif>من اليسار الى اليمين</option>
                                </select>
                              </div>
                              @error("dir")
                              <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="control-label"> اسم اللغة </label>
                              <div>
                                <input  type="text" name="name" value="{{$lang->name}}" class="form-control" id="inputName" >
                              </div>
                              @error("name")
                              <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>
                          </div>
                        </div>
                       
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="inputEmail" class="control-label"> الكود</label>
                            <div>
                              <input  type="text" name="code" value="{{$lang->code}}" class="form-control" id="inputName" >
                            </div>
                            @error("code")
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="inputSkills" class="control-label">صورة اللغة</label>
                            <div>
                              <div class="row">
                                <div class="col-md-9">
                                  <input   name="flag" type="file"  class="form-control"  >
                                </div>
                                <div class="col-md-2">
                                  <img src="{{asset('images/'.$lang->flag)}}" style="height: 50px; with:50px;margin-buttom:15px" alt="lang">
                                </div>
                              </div>
                            </div>
                            @error("flag")
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                          </div>
                        </div>
                      </div>
                       
        
                        <div class="col-md-3">
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