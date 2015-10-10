<!doctype html>
<html>
<head>
	<title>
		@yield('title',"Developer's Best Friend")
	</title>
	<meta charset='utf-8'>
    <link href="/css/main.css" type='text/css' rel='stylesheet'>
    @yield('head')
</head>
<body>
	<header>
		<h1>The Developer's Best Friend</h1>
		@yield('subheading')
	</header>

	<section>
		@yield('content')
	</section>

	<footer>
        &copy; SJ Hackney {{ date('Y') }}
    </footer>

</body>
</html>