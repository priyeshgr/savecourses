<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Coursera_To_DB</title>
	<link rel="stylesheet" type="text/css" href="/datatable/datatables.css">
	<script type="text/javascript" charset="utf8" src="/datatable/datatables.js"></script>
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<meta name="description" content="Save the courses from coursera to Database">
</head>
<body>
    <div class="container">
    

@yield('content')

 </div>
<script type="text/javascript">
	$(document).ready( function () {
		$('#table_id').DataTable();
	} );
</script>
	<script type="text/javascript" charset="utf8" src="js/script.js"></script>
</body>
</html>