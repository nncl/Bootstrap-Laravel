<!doctype html>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

		<title>PROJECT'S TITLE</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="robots" content="index, nofollow">

		<link rel="shortcut icon" href="/favicon.ico">

		<!-- FACEBOOK
		<meta property="og:locale" content="pt_BR">
		<meta property="og:url" content="">
		<meta property="og:title" content="">
		<meta property="og:site_name" content="">
		<meta property="og:description" content="">
		<meta property="og:image" content="">
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="=">
		<meta property="og:image:height" content="=">
		<meta property="og:type" content="website">
		-->

		<link type="text/css" rel="stylesheet" href="/assets/css/vendor.css" />
		<link type="text/css" rel="stylesheet" href="/assets/css/app.css" />

    @section('css')
    @show

		<script type="text/javascript" src="/assets/js/modernizr.js"></script>

		<!--[if lt IE 9]>
			<script src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv-printshiv.min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>

  <body itemscope itemtype="http://schema.org/WebPage">

    <section class="normal">
			@include('includes.header')

      @yield('content')

			@include('includes.footer')
    </section>

		<script type="text/javascript" src="/assets/js/vendor.js"></script>
    <script type="text/javascript" src="/assets/js/app.js"></script>

    @section('js')
    @show

  </body>
</html>
