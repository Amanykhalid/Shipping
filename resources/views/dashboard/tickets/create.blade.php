@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 205px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>التذاكر</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
              <li class="breadcrumb-item active">انشاء تذكرة</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

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
                    <h3 style="float: right;" class="card-title">انشاء تذكرة</h3>
                  </div>
                  <!-- /.card-header -->
                  
                  <div class="card-body col-8">
                    
                      <form class="form-horizontal" action="" method="post">
                          @method('post')
                          @csrf
                          <div class="row">
                            <div class="col-6">
                          <div class="form-group">
                            <label for="inputName" class="col-sm-12 control-label">اسم الشخص  صاحب التذكرة </label>
    
                            <div class="col-sm-10">
                              <select name="lang" class="form-control" id="">
                                <option value="user_id">لمى عيسى</option>  
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">

                        <div class="form-group">
                          <label for="inputName" class="col-sm-12 control-label">تصنيف التذكرة</label>
  
                          <div class="col-sm-10">
                            <select name="lang" class="form-control" id="">
                                <option value="user_id">اجتماعية</option>
                                <option value="user_id">اقصتادية</option>
                                <option value="user_id">سيادية</option>
                              </select>
                                  </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                      <div class="form-group">
                        <label for="inputName" class="col-sm-12 control-label">اولية التذكرة</label>

                        <div class="col-sm-10">
                          <select name="lang" class="form-control" id="">
                            <option value="user_id">مرتفعة</option>  
                            <option value="user_id">متوسطة</option>  
                            <option value="user_id">عادية</option>  

                          </select>
                        </div>
                      </div>
                    </div>
                   
                </div>
                <div class="form-group">
                    <label for="inputName" class="col-sm-12 control-label">جهات الاختصاص</label>

                    <div class="col-sm-10">
                      <select name="lang" multiple class="form-control" id="">
                          <option value="user_id">UNDP</option>
                          <option value="user_id">الشرطة المدنية</option>
                          <option value="user_id">جمعية الاخصلاص</option>
                          <option value="user_id">جمعية الانسان</option>

                        </select>
                            </div>
                  </div>
                    <div class="row">
                        <div class="col-12">
                        <div class="form-group">
                          <label for="inputEmail" class="col-sm-12 control-label">وصف قصيف</label>
  
                          <div class="col-sm-10">
                              <textarea name="description" class="textarea" id="" cols="30" rows="10"></textarea>
                          </div>
                        </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputName" class="col-sm-12 control-label"> ارفاق صور / ملفات</label>
    
                        <div class="col-sm-10">
                         <input type="file" multiple class="form-control">
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
                            </div>
               
            
            <!-- /.card-body -->
          
          <!-- /.card -->
        
        <!-- /.col -->
      
      <!-- /.row -->
    
    <!-- /.content -->
  
    
  <!-- /.content-wrapper -->



@endsection