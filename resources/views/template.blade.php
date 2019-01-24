<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@include('header')
</head>
<body>
	@include('nav')
	@yield('body')
	@yield('admin_body')


<script type="text/javascript">
	$(".dropdown-trigger").dropdown();
</script>
</body>
</html>