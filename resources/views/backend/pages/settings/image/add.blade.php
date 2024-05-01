@extends('backend.layout.template')

@section('body-content')
	<!--start content-->
	<main class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		  <div class="breadcrumb-title pe-3">eCommerce</div>
		  <div class="ps-3">
		    <nav aria-label="breadcrumb">
		      <ol class="breadcrumb mb-0 p-0">
		        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
		        </li>
		        <li class="breadcrumb-item active" aria-current="page">Ecommerce Logo</li>
		      </ol>
		    </nav>
		  </div>
		</div>
		<!--end breadcrumb-->

		<div class="row">
			<div class="col-lg-12 mx-auto">
				<form class="row g-3" action="{{ route('settings.logo.add') }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="card">
						<div class="card-header py-3 bg-transparent"> 
						  <div class="d-sm-flex align-items-center">
						    <h5 class="mb-2 mb-sm-0">Add A Logo</h5>
						    </div>
						</div>
						<div class="card-body">
						   	<div class="row g-3">
						     	<div class="col-12 col-lg-12">
                                    <img src="" class="img-thumbnail my-2" alt="">
									<div class="card shadow-none bg-light border">
							          <div class="card-body">
								            <div class="col-12 my-2">
								                <label class="form-label">Logo Image</label>
								                <input class="form-control" type="file" name="logo">
								            </div>
											<div class="col-12 my-2">
								                <label class="form-label">Define uses</label>
								                <select name="type" id="" class="form-control">
                                                    <option value="">Select Uses</option>
                                                    <option value="1">Favicon</option>
                                                    <option value="2">Top Logo</option>
                                                    <option value="3">Footer Logo</option>
                                                </select>
								            </div>
                                            <div class="col-12 my-2">
								                <label class="form-label">Logo Status</label>
								                <select name="status" id="" class="form-control">
                                                    <option value="">Select Status</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
								            </div>
                                            <div class="col-3">
								                <input class="form-control btn btn-primary my-2" type="submit" value="Change">
								            </div>
							          </div>
							        </div>
						     	</div>
						    </div>
					   </div><!--end row-->
					 </div>
					</div>
				</form>
			</div>
		</div><!--end row-->    
	</main>
	<!--end page main-->
@endsection