<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">

        <title>Clinic | Appointment</title>

    </head>

    <body>

        @extends('navbar')

    <div class="container" >
        <a href="newappointment"  style="float:right"><i class="fa fa-user-plus" style="font-size:35px;color:red"></i></a>
        <p class="titles" >Appointment</p>

        <hr><br>
        <table class="content">
            <tr>
                <th>Appointment No</th>
                <th>Patient ID</th>
                <th>Appointment Date (YYYY-MM-DD)</th>
                <th>Appointment Time (Hours)</th>

            </tr>
            @foreach ($appointments as $appointment)
            <tr>
                <td>{{$appointment['appt_no']}}</td>
                <td>{{$appointment['patient_id']}}</td>
                <td>{{$appointment['appt_date']}}</td>
                <td>{{$appointment['appt_time']}}</td>

            </tr>
            @endforeach
        </table>

    </div>
    </body>
</html>
