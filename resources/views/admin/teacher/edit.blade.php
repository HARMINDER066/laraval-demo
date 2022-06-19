@extends('admin.layout.app')
@section('title','E-SHOP || Teacher PAGE')
@push('custom-scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
@endpush
@section('main-content')
<main class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Home</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Teacher Update</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-12">
						<h6 class="mb-0 text-uppercase">Teacher Update</h6>
						<hr>
						<div class="card">
							<div class="card-body">
								@include('admin.include.notification')

								@if ($errors->any())
	    						<div class="alert alert-danger">
	       						 <ul>
	           				 @foreach ($errors->all() as $error)
	              				  <li>{{ $error }}</li>
	           				 @endforeach
	        						</ul>
	    						</div>
								@endif
								<div class="p-4 border rounded">
									<form class="row g-3" id="teacher_add" action="{{ route('admin.teacher_edit_save', ['id' => $data->id] )}}" method="post" enctype="multipart/form-data">
										@csrf
										<div class="col-md-4">
											<label for="validationDefault01" class="form-label">First name</label>
											<input type="text" class="form-control"  name="first_name" placeholder="Enter First Name" value="{{$data->first_name}}" >
										</div>
										<div class="col-md-4">
											<label for="validationDefault02" class="form-label">Last name</label>
											<input type="text" class="form-control"  name="last_name" placeholder="Enter Last Name" value="{{$data->last_name}}" >
										</div>
										<div class="col-md-4">
											<label for="validationDefaultUsername" class="form-label">Email</label>
												<input type="email" class="form-control" name="email" placeholder="Enter Email Address" value="{{$data->email}}" >
										</div>
										<div class="col-md-4">
											<label for="validationDefaultUsername" class="form-label">Image</label>
											<input class="form-control" type="file" name="photo" value="{{$data->photo}}" >	</div>
											<div class="col-md-4">
											<label for="validationDefaultUsername" class="form-label">Course Specialist</label>
											<input class="form-control" type="text" name="course_specialist" placeholder="EG: IT & SOFTWARE COURSE" value="{{$data->course_specialist}}" >	
										</div>
										<div class="col-md-4">
											<label for="validationDefaultUsername" class="form-label">Skills</label>
											<input class="form-control" type="text" name="skills" placeholder="EG: IT & SOFTWARE COURSE" value="{{$data->skills}}" >	
										</div>
										<div class="col-md-3">
											<label for="validationDefault03" class="form-label">Mobile</label>
											<input type="text" class="form-control" name="mobile" placeholder="Enter Mobile Number" value="{{$data->mobile}}" >
										</div>
										<div class="col-md-3">
											<label for="validationDefault03" class="form-label">City</label>
											<input type="text" class="form-control" name="city" placeholder="Enter City Name" value="{{$data->city}}" >
										</div>
										<div class="col-md-3">
											<label for="validationDefault04" class="form-label">State</label>
											<input type="text" class="form-control" name="state" placeholder="Enter State Name" value="{{$data->state}}" >
										</div>
										<div class="col-md-3">
											<label for="validationDefault05" class="form-label">Zip</label>
											<input type="text" class="form-control" name="zip" placeholder="Enter Zip Code" value="{{$data->zip}}" >
										</div>
										<div class="col-md-3">
											<label for="validationDefault01" class="form-label">Facebook</label>
											<input type="text" class="form-control" name="facebook" placeholder="Enter Facebook Link" value="{{$data->facebook}}" >
										</div>
										<div class="col-md-3">
											<label for="validationDefault02" class="form-label">Twitter</label>
											<input type="text" class="form-control" name="twitter" placeholder="Enter Twitter Link" value="{{$data->twitter}}" >
										</div>
										<div class="col-md-3">
											<label for="validationDefault02" class="form-label">Gmail</label>
											<input type="text" class="form-control" name="gmail" placeholder="Enter Gmail Link" value="{{$data->gmail}}" >
										</div>
										<div class="col-md-3">
											<label for="validationDefaultUsername" class="form-label">Linkdin</label>
												<input type="text" class="form-control" name="linkdin" placeholder="Enter Linkdin Link" value="{{$data->linkdin}}" >
										</div>
										<div class="col-md-12">
											<label for="validationDefault05" class="form-label">Address</label>
											<textarea class="form-control" name="address" placeholder="Enter Full Address"  value="{{$data->address}}" >{{$data->address}}</textarea>

										</div>
										<div class="col-md-12">
											<label for="validationDefault05" class="form-label">About</label>
											<textarea class="form-control ckeditor" name="about" placeholder="Enter About"  value="{{$data->about}}" >{{$data->about}}</textarea>

										</div>
										<div class="col-md-12">
											<label for="validationDefault05" class="form-label">Specification</label>
											<textarea class="form-control ckeditor" name="specification" placeholder="Enter Specification" value="{{$data->specification}}" >{{$data->specification}}</textarea>

										</div>
										<div class="col-12">
											<button class="btn btn-primary" type="submit">Submit form</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</main>

@endsection