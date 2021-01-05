@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 205px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>اضافة قائمة</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
              <li class="breadcrumb-item "><a href="/admin/menu">عرض القوائم</a></li>
              <li class="breadcrumb-item ">اضافة قائمة</li>
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
                    <form class="form-horizontal" action="{{route('menu.store')}}" method="post">
                        @method('post')
                        @csrf
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="control-label"> اسم القائمة </label>
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
                              <label for="inputName" class="control-label"> رابط القائمة </label>
                              <div>
                                <input  type="text" name="link" class="form-control" id="inputName" >
                              </div>
                              @error("link")
                              <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="control-label">اب القائمة </label>
                              <div>
                                <input  type="text" name="parent" class="form-control" id="inputName" >
                              </div>
                              @error("parent")
                              <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="control-label"> ترتيب القائمة </label>
                              <div>
                                <input  type="number" name="order" class="form-control" id="inputName" >
                              </div>
                              @error("order")
                              <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="inputName" class="control-label">نوع القائمة </label>
                              <div>
                                <select name="type" class="form-control" id="">
                                  <option value="main">رئيسية</option>
                                  <option value="primary">فرعية</option>

                                </select>
                              </div>
                              @error("type")
                              <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>
                          </div>
                        </div>
                        <div>
                          <input type="submit" value="اضافة" class="btn btn-block btn-xs btn-primary"> 
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