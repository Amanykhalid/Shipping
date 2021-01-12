@extends('layouts.site')
@section('contant')
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
   

	  <div class="collapse navbar-collapse" style="top: 0px" id="ftco-nav">
		<div class="row">
			<ul style="font-size: 10px" class="navbar-nav">
				@foreach ($menus as $menu)
					<li  class="nav-item"><a href="#get_rates" class="btn bigLink-login nav-link"  style="margin-top: 10px;">{{$menu->name}} </a></li>	
				@endforeach
						  
			</ul>
		</div>
	
	  </div>
	</div>
  </nav>
<!-- END nav -->
    <div class="hero-wrap" style="background-image: url('https://slickdeals.net/blog/wp-content/uploads/2020/04/20-hero-0414-store-shipping.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div id="get_rates" class="row no-gutters slider-text justify-content-start align-items-center">
          <div class="col-lg-4 col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text">
	            <h1 class="mb-4">Shipping  <span>is easier with</span> <span>SHIPX</span></h1>
	        
            </div>
          </div>
          <div class="col-lg-2 col"></div>
          <div class="col-lg-6 col-md-6 mt-0 mt-md-5 d-flex" >
          	<form action="#" class="request-form ftco-animate">
				  <h2>shipping with shipx</h2>
				  		<div class="row">
						<div class="col-7">
	    				<div class="form-group">
	    					<label for="" class="label"> Collection from</label>
							<select name="" class="form-control" id="">
								<option value="">palestine</option>
								<option value="">USA</option>
								<option value="">EYGPT</option>
								<option value="">SWIDAN</option>

							</select>	
						</div>
					</div>
					<div class="col-4">
	    				<div class="form-group">
							<label for="" class="label">  post code</label>
							<i class="fa fa-key icon"></i>

	    					<input type="text" class="form-control" placeholder="code">
						</div>
					</div>
					</div>
					<div class="row">
						<div class="col-7">
	    				<div class="form-group">
	    					<label for="" class="label">  Delivery to</label>
							<select name="" class="form-control" id="">
								<option value="">palestine</option>
								<option value="">USA</option>
								<option value="">EYGPT</option>
								<option value="">SWIDAN</option>
							</select>	
						</div>
					</div>
					<div class="col-4">
	    				<div class="form-group">
	    					<label for="" class="label">  post code</label>
	    					<input type="text" class="form-control" placeholder="code">
						</div>
					</div>
					</div>
					<div class="row">
						<div class="col-3">
	    				<div class="form-group">
	    					<label for="" class="label">Weight</label>
							<input type="text" class="form-control" name="Weight" placeholder="Weight">
						</div>
					</div>
					<div class="col-3">
	    				<div class="form-group">
	    					<label for="" class="label">Length</label>
							<input type="text" class="form-control" name="Length" placeholder="Length">
						</div>
					</div>
					<div class="col-3">
	    				<div class="form-group">
	    					<label for="" class="label">Width</label>
							<input type="text" class="form-control" name="Width" placeholder="Width">
						</div>
					</div>
					<div class="col-3">
	    				<div class="form-group">
	    					<label for="" class="label">Height</label>
							<input type="text" class="form-control" name="Height" placeholder="Height">
						</div>
					</div>
				</div>
				<div class="form-group">
					<input type="submit" value="QUOTE AND BOOK" class="btn btn-primary py-3 px-4">
				  </div>
			</div>
		</div>
					</div>
	    		
				
              </div>
           
	            
	    			</form>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section services-section ftco-no-pt ftco-no-pb">
      <div class="container">
      	<div id="Our_Partners" class="row justify-content-center">
          <div  class="col-md-12 heading-section text-center ftco-animate mb-5">
            <h2  class="mb-2">Our Partners</h2>
          </div>
        </div>
        <div class="row d-flex">
			<div class="col-md-2 d-flex align-self-stretch ftco-animate">
			    
			  </div>
			  <div class="col-md-3 d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services">
				  <div class="media-body py-md-4">
					  <img src="data:image/png;base64,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"  alt="Israel Post">
				  </div>
				</div>      
			  </div>
			  <div class="col-md-2 d-flex align-self-stretch ftco-animate">
			</div>
			  <div class="col-md-3 d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services">
				  <div class="media-body py-md-4" style="text-align: center">
					  <img src="data:image/png;base64,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" alt="DHL">
				  </div>
				</div>      
			  </div>
			  <div class="col-md-4 d-flex align-self-stretch ftco-animate">
			  </div>
			  
        </div>
      </div>
    </section>

	<section class="ftco-section">
    	<div class="container-fluid px-4">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5 fadeInUp ftco-animated">
            <h2 class="mb-2">Our News</h2>
          </div>
        </div>
    		<div class="row">
				@foreach ($news as $new)
				<div class="col-md-3">
    				<div class="car-wrap ftco-animate fadeInUp ftco-animated">
    					<div class="img d-flex align-items-end" style="background-image:url({{asset("images/$new->image_short")}})">
    					</div>
    					<div class="text p-4 text-center">
    						<h2 class="mb-0"><a href="https://www.qallam.hub-techs.com/store/home/product_view/2">{{$new->name}} </a></h2>
    						<p class="d-flex mb-0 d-block">
								<a href="{{route('detailspage2',$new->id)}}" class="btn btn-black btn-outline-black " style="margin-left: 80px">Details</a>
							</p>
    					</div>
    				</div>
    			</div>	
				@endforeach					
    			
    		</div>
    	</div>
	</section>
	
	<section class="ftco-section">
    	<div class="container-fluid px-4">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5 fadeInUp ftco-animated">
            <h2 class="mb-2">Our Blogs</h2>
          </div>
        </div>
    		<div class="row">
				@foreach ($blogs as $blog)
				<div class="col-md-3">
    				<div class="car-wrap ftco-animate fadeInUp ftco-animated">
    					<div class="img d-flex align-items-end" style="background-image:url({{asset("images/$blog->image_short")}});">
    					</div>
    					<div class="text p-4 text-center">
    						<h2 class="mb-0"><a href="https://www.qallam.hub-techs.com/store/home/product_view/2">{{$blog->name}}</a></h2>
    						<p class="d-flex mb-0 d-block"> <a href="#" class="btn btn-black btn-outline-black " style="margin-left: 80px">Details</a></p>
    					</div>
    				</div>
    			</div>
    
				@endforeach				
    			
    		</div>
    	</div>
	</section>
@endsection	

 
