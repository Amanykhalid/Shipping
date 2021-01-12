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
                <li class="breadcrumb-item active">  news name</li>
			  </ol>
			</div>
		  </div>
		  
        </div><!-- /.container-fluid -->
	  </section>
	  
	  <section class="main-content">
		<div class="container">
			<div class="row">
					<div class="col-md-8">
						<img src="{{asset('images\pages\7IKjT79HyZMgFIFYAMmtzWAuc34mPeN8KIBidC30.jpg')}}" alt=""/>
					</div>
				
					<div class="col-md-4 ">
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
								<div class="media">
									<img class="mr-3" src="{{asset('images\pages\lJ4uUCj8KGgzfho5jCm9CCCFvQ0KpeWcqhy3rGVV.jpg')}}" alt="Generic placeholder image">
									<div class="media-body">
									  <h6 class="mt-0">Media heading</h6>
									  Cras sit amet nibh libero, in gravida nulla. 
									</div>
								</div>
								<div class="media">
									<img class="mr-3" src="{{asset('images\pages\ByHMCmCchkIlGbSeY8J5ce318Al3Ju6FNvYG1pMd.jpg')}}" alt="Generic placeholder image">
									<div class="media-body">
									  <h6 class="mt-0">Media heading</h6>
									  Cras sit amet nibh libero, in gravida nulla. 
									</div>
								</div>
								<div class="media">
									<img class="mr-3" src="{{asset('images\pages\OmFfSUmHHWMm9yw8wvHCuZJw8KEb9hRBKfvHjTrc.jpg')}}" alt="Generic placeholder image">
									<div class="media-body">
									  <h6 class="mt-0">Media heading</h6>
									  Cras sit amet nibh libero, in gravida nulla. 
									</div>
								</div>
								<div class="media">
									<img class="mr-3" src="{{asset('images\pages\lcfI2hhnVVDmHl522n5mEnoagQTz4WVy1CG4QUp1.jpg')}}" alt="Generic placeholder image">
									<div class="media-body">
									  <h6 class="mt-0">Media heading</h6>
									  Cras sit amet nibh libero, in gravida nulla. 
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								<div class="media">
									<img class="mr-3" src="{{asset('images\pages\7qlgRs3ePIKcaCS0NPGZJCPJdeIQr3D5gUEJa3lV.jpg')}}" alt="Generic placeholder image">
									<div class="media-body">
									  <h6 class="mt-0">Media heading</h6>
									  Cras sit amet nibh libero, in gravida nulla. 
									</div>
								</div>
								<div class="media">
									<img class="mr-3" src="{{asset('images\pages\EuJPlC54yrEAtJZQIz5KIgsk8efBdhWo1ltbPE37.jpg')}}" alt="Generic placeholder image">
									<div class="media-body">
									  <h6 class="mt-0">Media heading</h6>
									  Cras sit amet nibh libero, in gravida nulla. 
									</div>
								</div>
								<div class="media">
									<img class="mr-3" src="{{asset('images\pages\9oMeonloLDmKbbAZ6VPll44K2FO0Kau27k0IE1fM.jpg')}}" alt="Generic placeholder image">
									<div class="media-body">
									  <h6 class="mt-0">Media heading</h6>
									  Cras sit amet nibh libero, in gravida nulla. 
									</div>
								</div>
								<div class="media">
									<img class="mr-3" src="{{asset('images\pages\jbukoWfdbUqyesTDEp2q5omG0plOUm8noNFFBBrc.jpg')}}" alt="Generic placeholder image">
									<div class="media-body">
									  <h6 class="mt-0">Media heading</h6>
									  Cras sit amet nibh libero, in gravida nulla. 
									</div>
								</div>
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
						<h3 class="title">The total price to move cargo from origin to destination.</h3>
						<p>By <span>Admin</span> May 23th 2021</p>
						<p>An act committed by the master or mariners of a vessel, for some unlawful or fraudulent purpose, contrary to their duty to the owners, whereby the latter sustain injury. It may include negligence, if so gross as to evidence fraud.</p>
						<p>
							A document that establishes the terms of a contract between a shipper and a transportation company. It serves as a document of title, a contract of carriage and a receipt for goods.
						</p>
					</div>
			</div>
		</div>
	  </section>

	  
	@endsection