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
								<li class="breadcrumb-item active" aria-current="page">Teacher Add</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-12">
						<h6 class="mb-0 text-uppercase">Teacher Add</h6>
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
									<form class="row g-3" id="teacher_add" action="{{route('admin.teacher_add')}}" method="post" enctype="multipart/form-data">
										@csrf
										<div class="col-md-4">
											<label for="validationDefault01" class="form-label">First name</label>
											<input type="text" class="form-control"  name="first_name" placeholder="Enter First Name" required>
										</div>
										<div class="col-md-4">
											<label for="validationDefault02" class="form-label">Last name</label>
											<input type="text" class="form-control"  name="last_name" placeholder="Enter Last Name" required>
										</div>
										<div class="col-md-4">
											<label for="validationDefaultUsername" class="form-label">Email</label>
												<input type="email" class="form-control" name="email" placeholder="Enter Email Address" required>
										</div>
										<div class="col-md-4">
											<label for="validationDefaultUsername" class="form-label">Image</label>
											<input class="form-control" type="file" name="photo" required>	</div>
											<div class="col-md-4">
											<label for="validationDefaultUsername" class="form-label">Course Specialist</label>
											<input class="form-control" type="text" name="course_specialist" placeholder="EG: IT & SOFTWARE COURSE" required>	
										</div>
										<div class="col-md-4">
											<label for="validationDefaultUsername" class="form-label">Skills</label>
											<input class="form-control" type="text" name="skills" placeholder="EG: IT & SOFTWARE COURSE" required>	
										</div>
										<div class="col-md-3">
											<label for="validationDefault03" class="form-label">Mobile</label>
											<input type="text" class="form-control" name="mobile" placeholder="Enter Mobile Number" required>
										</div>
										<div class="col-md-3">
											<label for="validationDefault03" class="form-label">City</label>
											<input type="text" class="form-control" name="city" placeholder="Enter City Name" required>
										</div>
										<div class="col-md-3">
											<label for="validationDefault04" class="form-label">State</label>
											<input type="text" class="form-control" name="state" placeholder="Enter State Name" required>
										</div>
										<div class="col-md-3">
											<label for="validationDefault05" class="form-label">Zip</label>
											<input type="text" class="form-control" name="zip" placeholder="Enter Zip Code" required>
										</div>
										<div class="col-md-3">
											<label for="validationDefault01" class="form-label">Facebook</label>
											<input type="text" class="form-control" name="facebook" placeholder="Enter Facebook Link" required>
										</div>
										<div class="col-md-3">
											<label for="validationDefault02" class="form-label">Twitter</label>
											<input type="text" class="form-control" name="twitter" placeholder="Enter Twitter Link" required>
										</div>
										<div class="col-md-3">
											<label for="validationDefault02" class="form-label">Gmail</label>
											<input type="text" class="form-control" name="gmail" placeholder="Enter Gmail Link" required>
										</div>
										<div class="col-md-3">
											<label for="validationDefaultUsername" class="form-label">Linkdin</label>
												<input type="text" class="form-control" name="linkdin" placeholder="Enter Linkdin Link" required>
										</div>
										<div class="col-md-12">
											<label for="validationDefault05" class="form-label">Address</label>
											<textarea class="form-control" name="address" placeholder="Enter Full Address"  required></textarea>

										</div>
										<div class="col-md-12">
											<label for="validationDefault05" class="form-label">About</label>
											<textarea class="form-control ckeditor" name="about" placeholder="Enter About"  required></textarea>

										</div>
										<div class="col-md-12">
											<label for="validationDefault05" class="form-label">Specification</label>
											<textarea class="form-control ckeditor" name="specification" placeholder="Enter Specification" required></textarea>

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