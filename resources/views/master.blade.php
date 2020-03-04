<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="">
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
		<nav>
			<ul class = "grid items-center h-24 xl:grid-cols-2 font-medium text-xl">
				<a href="{{url("/")}}"><img class="max-w-xs ml-10" src="https://d2wks4gidu9630.cloudfront.net/f2567f63-532f-4458-9723-65e1b6fd12c3/svg/codinglabs-logo.svg" alt="logo"/></a>
				<div class="options grid items-center xl:grid-cols-4 w-9/12 ml-auto">
					@yield("nav-options")	
				</div>
				
			</ul>
		</nav>
		@yield("content")
</body>
</html>