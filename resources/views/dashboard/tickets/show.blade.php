@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>التذكرة</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Invoice</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
       


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fa fa-ticket"></i>بيانات التذكرة
                    <small class="float-right">التاريخ: 12/12/2020</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    <strong> بيانات مدخل التذكرة</strong>
                  <address>
                    احمد خالد<br>
                    الهاتف: 051222112 <br>
                    البريد الالكتروني: gehan@gamil.com	
                  </address>
                  <address>
                    حالة التذكرة: 	

                    <button style="width: 100px;display:inline"  class="btn btn-block btn-danger">مرتفعة</button>      
                            </address>

                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    <strong> بيانات صاحب التذكرة</strong> 
                  <address>
                 لمى عيسى<br>
                    المحافظة, المدينة<br>
                    الجنس: انثى<br>
                    الهاتف: 0593214565<br>
                    البريد الاكلتروني: lama@gmail.com
                  </address>
                </div>
                <!-- /.col -->
                {{--  <div class="col-sm-4 invoice-col">
                  <b>Invoice #007612</b><br>
                  <br>
                  <b>Order ID:</b> 4F3S8J<br>
                  <b>Payment Due:</b> 2/22/2014<br>
                  <b>Account:</b> 968-34567
                </div>  --}}
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <div class="callout callout-info">
                <h5><i class="fas fa-info"></i> الموضوع:</h5>
                وصف شامل للتذكرة.
              </div>
             
            </div>
            <div class="invoice p-3 mb-3">
                <!-- title row -->
                <div class="row">
                  <div class="col-12">
                    <h4>
                        <i class="fa fa-paperclip" aria-hidden="true"></i>

                       ملحقات التذكرة
                    </h4>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                  <div class="col-sm-8 invoice-col">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                          <th>المرسل </th>
                          <th>تاريخ الارسال</th>
                          <th>المرفقات</th>

                    
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>احمد سالم</td>
                          {{-- <td>UNDP</td> --}}
                          <td>20-12-2020</td>
                          <td><a href="">صور</a>  , <a href="">ملف</a>
                          
                          </td>

                
                       
                     
                        </tbody>
                      </table>
  
                  </div>
                 
                </div>
          
               
              </div>
            <div class="invoice p-3 mb-3">
                <!-- title row -->
                <div class="row">
                  <div class="col-12">
                    <h4>
                      <i class="nav-icon fas fa-edit"></i>المؤشرات
                    </h4>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                  <div class="col-sm-8 invoice-col">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                          <th>التصنيف</th>
                          <th>العامل</th>
                          <th>النسبة</th>
                    
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>اجتماعي</td>
                          <td>عنف ضد المرأة</td>
                          <td><div class="progress progress-sm">
                            <div class="progress-bar bg-primary" style="width: 70%">70%</div>
                          </div></td>
                
                        </tr>
                        <tr>
                          <td>اقتصادي</td>
                          <td>اهمال في المصروف اليومي</td>
                          <td><div class="progress progress-sm">
                            <div class="progress-bar bg-primary" style="width: 20%">20%</div>
                          </div></td>
                        </tr>
                     
                        </tbody>
                      </table>
  
                  </div>
                 
                </div>
          
               
              </div>

              <div class="invoice p-3 mb-3">
                <!-- title row -->
                <div class="row">
                  <div class="col-12">
                    <h4>
                        <i class="fa fa-exchange" aria-hidden="true"></i>
                        التحويلات
                    </h4>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                  <div class="col-sm-8 invoice-col">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                          <th>المرسل </th>
                          <th>المستقبل</th>
                          <th>تاريخ الارسال</th>
                          <th>الملاحظات</th>

                    
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>احمد سالم</td>
                          <td>UNDP</td>
                          <td>20-12-2020</td>
                          <td>يرجى الرد باسرع وقت</td>

                
                       
                     
                        </tbody>
                      </table>
  
                  </div>
                 
                </div>
          
               
              </div>
              <section class="content-header">
                <div class="container-fluid">
                  <div class="row mb-2">
                    <div class="col-sm-6">
                      <h1>التعليقات</h1>
                    </div>
                
                  </div>
                </div><!-- /.container-fluid -->
              </section>
              <div class="card card-widget col-8" >
                <div class="card-header">
                
                  <!-- /.user-block -->
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                      <i class="far fa-circle"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
         
                <!-- /.card-body -->
                <div class="card-footer card-comments">
                  <div class="card-comment">
                    <!-- User image -->
                    <img style="float:right" class="img-circle img-sm" src="data:image/png;base64,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" alt="User Image">
  
                    <div class="comment-text">
                      <span class="username">
                        <a href="">جهان احمد</a>
                        <span class="text-muted float-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                      It is a long established fact that a reader will be distracted
                      by the readable content of a page when looking at its layout.
                    </div>
                    <!-- /.comment-text -->
                  </div>
                  <!-- /.card-comment -->
                  <div class="card-comment">
                    <!-- User image -->
                    <img style="float:right" class="img-circle img-sm" src="data:image/png;base64,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" alt="User Image">
  
                    <div class="comment-text">
                      <span class="username">
                        <a href="">خالد سالم</a>
                        <span class="text-muted float-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                      It is a long established fact that a reader will be distracted
                      by the readable content of a page when looking at its layout.
                    </div>
                    <!-- /.comment-text -->
                  </div>
                  <!-- /.card-comment -->
                </div>
                <!-- /.card-footer -->
                <div class="card-footer">
                  <form action="#" method="post">
                    <!-- .img-push is used to add margin to elements next to floating images -->
                    <div class="img-push">
                    <textarea name="" id="" class="textarea" cols="30" rows="10"></textarea>
                    </div>
                    <button class="btn btn-primary" disabled value="ارسال">ارسال</button>
                  </form>
                </div>
                <!-- /.card-footer -->
              </div>
       
              
              
          
          </div>
          
        </div>
      </div>
    </section>
  
 
  

  </div>
    
@endsection