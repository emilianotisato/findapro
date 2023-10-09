<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	@vite('resources/css/app.css')
</head>
<body class="h-full">
  

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  @yield('content')
</div>

</body>
</html>
