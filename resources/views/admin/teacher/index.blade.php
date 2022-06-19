@extends('admin.layout.app')
@section('title','E-SHOP || Teacher PAGE')
@push('custom-css')
  <link href="{{asset('admin/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
@endpush
@push('custom-scripts')
  <script src="{{asset('admin/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript">

  $(function () {

    

    var table = $('#teacher-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.teacher_list') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name:'name',searchable: false, sortable : false, visible:true},
            {data: 'email', name: 'email'},
            {data: 'mobile', name: 'mobile'},
            {data: 'address', name: 'address'},
            {data: 'active', name: 'active'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
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
								<div class="p-4 border rounded">
									<div class="table-responsive mt-3">
                     <table class="table align-middle" id="teacher-table">
                       <thead class="table-secondary">
                         <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Address</th>
                          <th>Status</th>
                          <th>Actions</th>
                         </tr>
                       </thead>
                       <tbody>
                       </tbody>
                   </table>
               </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</main>

@endsection