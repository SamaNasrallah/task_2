<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet"  href="{{asset('css/style.css')}}">
<script src="{{ asset('js/script.js') }}"></script>

<title>task 2</title>
    @include('includes.pagStyle')
</head>
<body>
    <h1 class="nav nav-tabs" >
        Archive System
    </h1>


    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <form action="{{ route('file.search') }}" method="GET" class="d-flex">
            <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search" >
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
      </nav>
 
     <!--   الجزء المتغير   -->
<div class="container">
      @yield('MainContent')   
</div>     


</body>
     @include('includes.pagjS')
</html>