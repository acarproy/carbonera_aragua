<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Carbonera Aragua, C.A.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Carbonera Aragua, C.A.</title>

	@include('frontend.partials.style')

</head>

<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

		@include('frontend.partials.navbarhome')

		<div class="frontend-content mdl-layout__content">

			@yield('content') 

			@include('frontend.partials.footer')

			@include('frontend.partials.script')

		</div>
	</div>
</body>

</html>