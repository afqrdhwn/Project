<!DOCTYPE html>
<html>
<head>
    <title>Clinic | Register Patient</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/homepage.css" rel="stylesheet">
</head>
<body>

    @extends('navbar')

    <br><br><br><br><br>
  <div class="container mt-4" style="  width:50%; height:400px ">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="titles">
    Register New Patient <hr>
  </div>
  <div class="card" >

    <div class="card-body">
      <form name="patient" id="patient" method="post" action="{{url('store-form')}}">
       @csrf
        <div class="form-group">
          <input type="text" id="name" name="name" class="form-control" placeholder="Full Name" required="">
        </div>
        <div class="form-group">
          <input type="text" id="email" name="email" class="form-control" placeholder="Email">
        </div>

          <div class="form-group">
            <input type="text" id="phoneno" name="phoneno" class="form-control" placeholder="Phone Number" required="">
          </div>
        <button type="submit" class="btn btn-primary " style="  margin: 0;position: absolute; top: 110%; width:50%; left:25%">Submit</button>
      </form>
    </div>
    </div>
  </div>
</div>
</body>
</html>
