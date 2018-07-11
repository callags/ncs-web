<html>
    <head>
        <title>NCS website @yield('title')</title>
    </head>
    <body>
        <!DOCTYPE html>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="{{asset('css/app.css')}}" rel="stylesheet" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
		integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		



		<!-- Navbar -->
		<div class="w3-top">
			<div class="w3-bar w3-theme w3-top w3-left-align w3-large">
				<a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
				<a href="/" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Home</a>
				<a href="/logo" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Logo</a>
				<a href="/about" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
				<a href="/faculty" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Faculty</a>
				<a href="/contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
				<a href="/infrastructure" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Infrastructure</a>
				<a href="/news" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">News</a>
			</div>
		</div>
    </body>
</html>