<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="Ready to use your life experience and knowledge and turn it into a 6 or 7 figure empire as a coach and/or speaker?">

	    <title>Dr. Sonja - Build Your Empire Tour 2019</title>

	    <meta property="og:title" content="Dr. Sonja's Build Your Empire Tour 2019">
		<meta property="og:description" content="Ready to use your life experience and knowledge and turn it into a 6 or 7 figure empire as a coach and/or speaker?">
		<meta property="og:image" content="{{ URL::asset('img/banner-image-1.jpg') }}">
		<meta property="og:url" content="http://www.buildyourempiretour.com">

	    <!-- Bootstrap Core CSS -->
	    <link href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

	    <!-- Custom Fonts -->
	    <link href="{{ URL::asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
	    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	    <link href="{{ URL::asset('vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">

	    <!-- Custom CSS -->
	    <link href="{{ URL::asset('css/stylish-portfolio.min.css') }}" rel="stylesheet">
	    <link href="{{ URL::asset('css/layouts.css') }}" rel="stylesheet">
	    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
	</head>
	<body id="page-top">

		@yield('content')
		@include('layouts.footer')
		@include('layouts.js')
	</body>
</html>