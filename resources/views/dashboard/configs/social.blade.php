@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 205px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>حسابات السوشل ميديا</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">الرئيسية</a></li>
              <li class="breadcrumb-item "><a href="">الاعدادات الاساسية</a></li>
              <li class="breadcrumb-item ">حسابات السوشل ميديا<</li>
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
                  <h3 style="float: right;" class="card-title">حسابات السوشل ميديا<</h3>
                </div>
                <!-- /.card-header -->
                
                <div class="card-body col-7">
                  
                    <form class="form-horizontal" action="" method="post">
                        @method('post')
                        @csrf
                      <div class="form-group">
                        <label for="inputName" class="col-sm-4 control-label">رابط الفيس بوك </label>

                        <div class="col-sm-10">
                          <input  type="text" name="facebook" value="" class="form-control" id="inputName" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" class="col-sm-4 control-label">رابط  الانستقرام </label>

                        <div class="col-sm-10">
                          <input  type="text" name="instagram" value="" class="form-control" id="inputName" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" class="col-sm-4 control-label">رابط توتير </label>

                        <div class="col-sm-10">
                          <input  type="text" name="twitter" value="" class="form-control" id="inputName" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" class="col-sm-4 control-label">رقم الواتساب  </label>

                        <div class="col-sm-10">
                          <input  type="text" name="whatsapp" value="" class="form-control" id="inputName" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputSkills" class="col-sm-4 control-label">رابط اللينكدان </label>

                        <div class="col-sm-10">
                          <input  type="text" name="linkelin" value="" class="form-control" id="inputName" >
                        </div>
                      </div>
                 
                      <div class="col-sm-10">
                        <input type="submit" value="تعديل " class="btn btn-xs btn-primary"> 
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