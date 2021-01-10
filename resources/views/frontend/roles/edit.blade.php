@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 205px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>صلاحيات المستخدمين</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">الصلاحيات</a></li>
              <li class="breadcrumb-item active"> تعديل صلاحيات </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     <!-- row -->
     <form class="form-horizontal" enctype="multipart/form-data" action="{{route('roles.update', $role->id)}}" method="post">
        @method('PUT')
        @csrf
        <div class="row">
        <div class="col-md-12">
            <div class="card mg-b-20">
                <div class="pull-right">
                    <a class="btn btn-primary btn-sm" href="{{ route('roles.index') }}">رجوع</a>
                </div>
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        <div class="form-group">
                            <p>اسم الصلاحية :</p>
                            {!! Form::text('name', $role->name, array('placeholder' => 'Name','class' => 'form-control')) !!}
                            @error("name")
                              <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-4">
                            <ul id="treeview1">
                                <li><a href="#">الصلاحيات</a>
                                    <ul>
                                        <li>
                                            @foreach($permission as $value)
                                            <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                {{ $value->name }}</label>
                                            <br />
                                            @endforeach
                                        </li>
    
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">تحديث</button>
                        </div>
                        <!-- /col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    <!-- row closed -->
</div>



@endsection

