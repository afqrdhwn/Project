<!DOCTYPE html>
<html>
<head>
    <title>Clinic | New Appointment</title>
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
    Make New Appointment <hr>
  </div>
  <div class="card" >

    <div class="card-body">
      <form name="newappointment" id="newappointment" method="post" action="{{url('save')}}">
       @csrf

       <div class="form-group">
        <input type="text" id="patient_id" name="patient_id" class="form-control" placeholder="Patient ID" required="">
      </div>

        <div class="form-group">
          <input type="date" id="appt_date" name="appt_date" class="form-control" placeholder="Date" required="">
        </div>

          <div class="form-group">
            <input type="time" id="appt_time" name="appt_time" class="form-control" placeholder="Time (Hours)" required="">
          </div>

        <button type="submit" class="btn btn-primary " style="  margin: 0;position: absolute; top: 110%; width:50%; left:25%">Submit</button>
      </form>
    </div>
    </div>
  </div>
</div>
</body>
</html>
