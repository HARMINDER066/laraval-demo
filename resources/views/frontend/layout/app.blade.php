<!DOCTYPE html>
<html lang="en">

<head>
@include('frontend.include.head')	

</head>

		


	<body>
		<!-- PRELOADER SPINNER
		============================================= -->		
		<div id="loader-wrapper">
			<div id="loading">
				<div id="loading-center">
					<div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
				</div>
			</div>
		</div>

				<div id="page" class="page">


@include('frontend.include.navbar')
	<!--/ End Header -->
	@yield('main-content')
	

	@include('frontend.include.footer')


	</body>

	</html>