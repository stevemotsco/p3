<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Steve Motsco">
    <title>@yield("title","Developer's Best Friend")</title>
	<!-- PRODUCTION  -->
	<link rel='stylesheet' href='/css/style.css' type='text/css'>  
    <!-- LOCAL 
    <link rel='stylesheet' href='/p3/public/css/style.css' type='text/css'>  -->

	@yield('head')
</head>

<body>
	<div>
		@yield('nav')	
	</div>

	<div class="wbdr">
		<table>
			<tr>
				<th>
					<!-- PRODUCTION  -->
					<img src='/images/generate.png' alt='Generator Logo'><br/>  
				    <!-- LOCAL 
					<img src='/p3/public/images/generate.png' alt='Generator Logo'><br/>  -->
				</th>
				<th>
					<h1>Developer's Best Friend</h1>
					<h3>Generate data to assist when<br/>displaying and testing applications</h3>
				</th>
			</tr>
		</table>
	</div>

	<div>
		@yield('content')

		@yield('body')

		@yield('results')

		@yield('nav')	
	</div>

	@yield('footer')
	
</body>
</html>





