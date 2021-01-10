@extends('layouts.dashboard')
@section('content')

<div class="content-wrapper" style="min-height: 205px;">
    <div class="container">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>تعديل مستخدم</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">الرئيسية</a></li>
              <li class="breadcrumb-item "><a href="/admin/users">  عرض جميع المستخدمين</a></li>
              <li class="breadcrumb-item ">تعديل مستخدم</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> رجوع</a>
            </div>
        </div>
</div>
{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
        <strong>اسم المستخدم:</strong>
        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        @error("name")
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
        <strong>ايميل المستخدم:</strong>
        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        @error("email")
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
        <strong>كلمة السر :</strong>
        {!! Form::password('password', array('placeholder' => 'كلمة السر','class' => 'form-control')) !!}
        @error("password")
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
        <strong>تاكيد كلمة السر :</strong>
        {!! Form::password('confirm-password', array('placeholder' => 'تاكيد كلمة السر','class' => 'form-control')) !!}
        @error("confirm-password")
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
        <strong> الصلاحية :</strong>
        {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
        @error("roles")
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    </div>
</div>

  
  
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>


{!! Form::close() !!}
    </div>
</div>
@endsection