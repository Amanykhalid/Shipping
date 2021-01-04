@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 205px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>تعديل صفحة</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">الرئيسية</a></li>
              <li class="breadcrumb-item "><a href="/admin/pages">  عرض جميع الصفحات</a></li>
              <li class="breadcrumb-item ">تعديل صفحة</li>
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
                    <form class="form-horizontal" enctype="multipart/form-data" action="{{route('pages.update',$page->id)}}" method="post">
                        @method('put')
                        @csrf
                        <input type="text"value="sliderId" name="pageId" hidden>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="control-label">النوع </label>
                              <div>
                                <select name="type" class="form-control" id="">
                                  <option value="news" @if($page->type == 'news') selected @endif> news</option>
                                  <option value="blog" @if($page->type == 'blog') selected @endif> blog</option>
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
                                  <option value="{{$langs->code}}" @if($page->lang ==$langs->code) selected @endif> {{$langs->name}}</option>
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
                                <input  type="text" name="name" value="{{$page->name}}"  class="form-control" id="inputName" >
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
                                <input  type="text" name="title" value="{{$page->title}}"  class="form-control" id="inputName" >
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
                                <img src="{{asset('images/'.$page->image_short)}}" style="height: 200px; margin-buttom:15px" alt="lang"  class="w-100">
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset('images/'.$page->image_long)}}" style="height: 200px;margin-buttom:15px" alt="lang" class="w-100">
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="control-label"> عنوان الزر  </label>
                              <div>
                                <input  type="text" name="button_title" value="{{$page->button_title}}"  class="form-control" id="inputName" >
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
                                <input  type="text" name="button_link" value="{{$page->button_link}}"   class="form-control" id="inputName" >
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
                              <textarea name="des_short" class="textarea" id="" cols="30" rows="10">
                                  {{$page->des_short}}
                              </textarea>
                          </div>
                          @error("des_short")
                          <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="inputName" class="control-label">وصف شامل  </label>
                          <div >
                            <textarea name="des_long" class="textarea" id="" cols="30" rows="10">
                                {{$page->des_long}}
                            </textarea>
                          </div>
                          @error("des_long")
                          <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="inputEmail" class="control-label"> meta</label>
                          <div>
                              <textarea name="meta" class="textarea" id="" cols="30" rows="10">
                                {{$page->meta}}
                              </textarea>
                          </div>
                          @error("meta")
                          <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>

                      <div>
                        <input type="submit" value="تعديل" class="btn btn-block btn-xs btn-primary"> 
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