<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Toko</title>	   

        <!-- Bootstrap Core CSS -->	    
	    {!! Html::style('assets/css/bootstrap.min.css') !!}
	    <!-- Customizable CSS -->
	
        {!! Html::style('assets/css/main.css') !!}
	    {!! Html::style('assets/css/green.css') !!}
		{!! Html::style('assets/css/owl.carousel.css') !!}
        {!! Html::style('assets/css/owl.transitions.css') !!}
		{!! Html::style('assets/css/animate.min.css') !!}
		<!-- Demo Purpose Only. Should be removed in production -->
		

       
        {!! Html::style('assets/css/orange.css') !!}
 
		<!-- Demo Purpose Only. Should be removed in production : END -->

	    <!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
		
		<!-- Icons/Glyphs -->
		{!! Html::style('assets/css/font-awesome.min.css') !!}
        


	</head>
<body>
<div class="wrapper">

 @include('element.topmenu')
 

 @include('element.menu')

 @yield('content')

 @include('element.footer')


	<!-- JavaScripts placed at the end of the document so the pages load faster -->
    {!! Html::script('assets/js/jquery-1.10.2.min.js') !!}
    {!! Html::script('assets/js/jquery-migrate-1.2.1.js') !!}
    {!! Html::script('assets/js/bootstrap.min.js') !!}
	
    {!! Html::script('assets/js/gmap3.min.js') !!}
    {!! Html::script('assets/js/bootstrap-hover-dropdown.min.js') !!}
    {!! Html::script('assets/js/owl.carousel.min.js') !!}
    {!! Html::script('assets/js/css_browser_selector.min.js') !!}
    {!! Html::script('assets/js/echo.min.js') !!}
    {!! Html::script('assets/js/jquery.easing-1.3.min.js') !!}
    {!! Html::script('assets/js/bootstrap-slider.min.js') !!}
    {!! Html::script('assets/js/jquery.raty.min.js') !!}
    {!! Html::script('assets/js/jquery.prettyPhoto.min.js') !!}
    {!! Html::script('assets/js/jquery.customSelect.min.js') !!}
    {!! Html::script('assets/js/wow.min.js') !!}
	{!! Html::script('assets/js/scripts.js') !!}

	<!-- For demo purposes – can be removed on production -->
	
	
	<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
	
	<!-- For demo purposes – can be removed on production : End -->

	<script src="http://w.sharethis.com/button/buttons.js"></script>

</body>
</html>