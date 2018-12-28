<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Veritas - Dashboard</title>
    <!-- Nprogress -->
	{{-- <link href="https://unpkg.com/nprogress@0.2.0/nprogress.css" rel="stylesheet" /> --}}
	<script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
	<!-- theme style -->
	<link rel="stylesheet" href="/admin/css/master_style.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<link rel="stylesheet" type="text/css" href="/admin/css/all.bundle.css">
	<style>
#nprogress .bar {
background: #fc4b6c !important;
}
#nprogress .spinner-icon {
  border-top-color: #fc4b6c !important;
  border-left-color: #fc4b6c !important;
}

.skin-green .wrapper, .skin-green .main-sidebar, .skin-green .left-side {
	background-color: #FFF !important;
}
.skin-green .sidebar a:hover {
	color: #FFF !important;
	background: #00acc1 !important;
}
	</style>
  </head>

<body class="hold-transition skin-green sidebar-mini">
	<div id="app">
		@yield('content-body')
	</div>
<script src="/js/all.bundle.js"></script>
{{-- <script src="/admin/js/template.js"></script> --}}
</body>
</html>