<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">

        <title>Clinic | Health Record</title>

    </head>

    <body>

        @extends('navbar')

    <div class="container" >
        <p class="titles" >Health Record</p><hr><br>
        <table class="content">
            <tr>
                <th>Record ID</th>
                <th>Diagnosis</th>
                <th>Date Diagnosed</th>
                <th>Doctor</th>
                <th>Payment</th>
                <th>Prescription ID</th>
                <th>Patient ID </th>
            </tr>
            @foreach ($health_records as $health_record)
            <tr>
                <td>{{$health_record['record_id']}}</td>
                <td>{{$health_record['diagnosis']}}</td>
                <td>{{$health_record['date_diagnosed']}}</td>
                <td>{{$health_record['doctor']}}</td>
                <td>{{$health_record['payment']}}</td>
                <td>{{$health_record['prescription_id']}}</td>
                <td>{{$health_record['patient_id']}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    </body>
</html>
