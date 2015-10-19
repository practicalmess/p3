<!doctype html>
<html>
<head>
	<title>
		@yield('title',"Developer's Best Friend")
	</title>
	<meta charset='utf-8'>
    <link href="/css/main.css" type='text/css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/journal/bootstrap.min.css" type="text/css" rel="stylesheet">
    @yield('head')
</head>
<body>
	<nav>
		@yield('nav')
	</nav>

	<header>
		@yield('heading')
	</header>

	<section>
		@yield('content')
	</section>

	<footer>
        &copy; SJ Hackney {{ date('Y') }}
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</body>
</html>