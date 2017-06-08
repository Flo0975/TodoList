<html>
	<head>
		<title>Todo</title>
  	<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>	
	
	<body>
	 <nav class="navbar navbar-default">
     <div class="container-fluid">
       <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="#">Application Todo List</a>
       </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="{{ URL::route('home')}}">Accueil</a></li>
            <li><a href="{{ URL::route('credits')}}">Crédits</a></li>
        </div>
    </div>
  </nav>
  	<div class="container">
  	   <div class="jumbotron">
  		   @yield('content')
  	   </div>
  	</div>
	</body>
</html>