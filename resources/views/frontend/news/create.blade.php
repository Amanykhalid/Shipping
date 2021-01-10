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
              <li class="breadcrumb-item "><a href="/admin/pages">  عرض جميع الصفحات</a></li>
              <li class="breadcrumb-item ">اضافة صفحة</li>
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
                    <form class="form-horizontal" enctype="multipart/form-data" action="{{route('pages.store')}}" method="post">
                        @method('post')
                        @csrf
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="control-label">النوع </label>
                              <div>
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
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="control-label">اللغة </label>
                              <div>
                                <select name="lang" class="form-control" id="">
                                  @foreach ($langs as $langs)
                                  <option value="{{$langs->code}}"> {{$langs->name}}</option>
                                  @endforeach
                                </select>
                              </div>
                              @error("lang")
                              <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="control-label"> الاسم  </label>
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
                              <label for="inputName" class="control-label"> العنوان  </label>
                              <div >
                                <input  type="text" name="title" class="form-control" id="inputName" >
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
                              <label for="inputName" class="control-label"> صورة العرض  </label>
                              <div>
                                <input  type="file" name="image_short"  class="form-control" id="inputName" >
                             </div>
                             @error("image_short")
                             <span class="text-danger">{{$message}}</span>
                             @enderror
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="control-label"> صورة الوصف  </label>
                              <div >
                                <input  type="file" name="image_long"  class="form-control" id="inputName" >
                              </div>
                              @error("image_long")
                              <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="control-label"> عنوان الزر  </label>
                              <div>
                                <input  type="text" name="button_title"  class="form-control" id="inputName" >
                              </div>
                              @error("button_title")
                              <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="control-label"> رابط الزر  </label>
                              <div >
                                <input  type="text" name="button_link"  class="form-control" id="inputName" >
                              </div>
                              @error("button_link")
                              <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>
                          </div>
                        </div>
             
                        <div class="form-group">
                          <label for="inputName" class="control-label">وصف قصير  </label>
                          <div>
                              <textarea name="des_short" class="textarea" id="" cols="30" rows="10"></textarea>
                          </div>
                          @error("des_short")
                          <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="inputName" class="control-label">وصف شامل  </label>
                          <div >
                            <textarea name="des_long" class="textarea" id="" cols="30" rows="10"></textarea>
                          </div>
                          @error("des_long")
                          <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="inputEmail" class="control-label"> meta</label>
                          <div>
                              <textarea name="meta" class="textarea" id="" cols="30" rows="10"></textarea>
                          </div>
                          @error("meta")
                          <span class="text-danger">{{$message}}</span>
                          @enderror
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