<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width==device-width, initial-scale=1.0">
		
		<title>@yield('head_title')</title>
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.6.4.js"></script>
	</head>

	<body>
		<div class = "container">
        	@yield('content')
		</div>
    </body>
</html>