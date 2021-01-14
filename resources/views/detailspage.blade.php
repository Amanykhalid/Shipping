@extends('layouts.site')
@section('contant')
    
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
			<div class="row">
			  <div class="container">
                <h1>News</h1>
			  </div>
          </div>
          <div class="row">
			<div class="container">
              <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/">Home </a></li>
				<li class="breadcrumb-item"><a href="/">{{$page->type}} </a></li>
                <li class="breadcrumb-item active">  {{$page->name}}</li>
			  </ol>
			</div>
		  </div>
		  
        </div><!-- /.container-fluid -->
	  </section>
	  
	  <section class="main-content">
		<div class="container">
			<div class="row">
					<div class="col-md-9">
						<img src='{{asset("images/$page->image_long")}}' alt=""/>
					</div>
				
					<div class="col-md-3 ">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
							  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Populer</a>
							</li>
							<li class="nav-item">
							  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Recent</a>
							</li>
					
						</ul>
						  <div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								@foreach ($news as $new)
								<div class="media">
									<img class="mr-3" src='{{asset("images/$new->image_short")}}' alt="Generic placeholder image">
									<div class="media-body">
									  <h6 class="mt-0">{{$new->name}}</h6>
									  @isset($new->des_short)
										{!! $new->des_short !!}
									@endisset
									 
									</div>
								</div>	
								@endforeach
								
							</div>
							<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								@foreach ($blogs as $new)
								<div class="media">
									<img class="mr-3" src='{{asset("images/$new->image_short")}}' alt="Generic placeholder image">
									<div class="media-body">
									  <h6 class="mt-0">{{$new->name}}</h6>
									  @isset($new->des_short)
										{!! $new->des_short !!}
									@endisset
									 
									</div>
								</div>	
								@endforeach
							</div>
						  </div>
					</div>
			</div>
		</div>

	  </section>
	  <section class="detail-content">
		<div class="container">
			<div class="row">
					<div class="col-md-9">
						<h3 class="title">{{$page->title}}</h3>
						<p>By <span>Admin</span> {{$page->created_at->format('M.d.Y H:i:a')}}</p>
						<p>
							{!! $page->des_long !!}
						</p>
						
					</div>
			</div>
		</div>
	  </section>

	  
	@endsection