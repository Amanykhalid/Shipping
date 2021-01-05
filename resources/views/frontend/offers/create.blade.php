@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 205px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>اضافة عرض</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
              <li class="breadcrumb-item "><a href="/admin/offers"> عرض جميع العروض</a></li>
              <li class="breadcrumb-item ">اضافة عرض</li>
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
                  <h3 style="float: right;" class="card-title">اضافة عرض</h3>
                </div>
                <!-- /.card-header -->
                
                <div class="card-body">
                  <div class="container">
                    <form class="form-horizontal" enctype="multipart/form-data" action="{{route('offers.store')}}" method="post">
                        @method('post')
                        @csrf
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="control-label"> اسم العرض </label>
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
                         
                        </div>
                        
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="control-label">صورة العرض</label>
                              <div>
                                <input  type="file" name="image" value="" class="form-control" id="inputName" >
                              </div>
                              @error("image")
                              <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputSkills" class="control-label"> نوع العرض</label>
                              <select name="type" class="form-control" id="">
                                <option value="news"> news</option>
                                <option value="blog"> blog</option>
                              </select>
                            </div>
                            @error("type")
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputEmail" class="control-label">وصف العرض</label>
                          <div>
                              <textarea name="des" class="textarea" id="" cols="30" rows="10"></textarea>
                          </div>
                          @error("des")
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