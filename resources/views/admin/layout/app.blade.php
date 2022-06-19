<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.include.head')	

</head>

		


	<body>
<!--start wrapper-->
  <div class="wrapper">
   
		


@include('admin.include.navbar')
@include('admin.include.sidebar')
	<!--/ End Header -->
	@yield('main-content')
	

	@include('admin.include.footer')

</div>
	</body>

	</html>