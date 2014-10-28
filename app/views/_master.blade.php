<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="author" content="Steve Motsco">
    <title>@yield("title","Developer's Best Friend")</title>
	<link rel='stylesheet' href='/css/style.css' type='text/css'>

	@yield('head')

	
</head>
<body>
	<table>
		<tr>
			<td>
				<img src='/images/generate.png' alt='Generator Logo'><br/>
			</td>
			<td>
				<h1>Developer's Best Friend</h1>
			</td>
		</tr>
	</table>

	@yield('content')

	@yield('body')

	@yield('results')

	<nav>
		<ul>
			@yield('nav')
		</ul>
	</nav>

	@yield('footer')
	
</body>
</html>





