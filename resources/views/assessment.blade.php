<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">

        <title>Clinic | Health Assessment</title>
    </head>

    <body>

    @extends('navbar')

    <div class="container" >
        <p class="titles" >Health Assessment</p><hr><br>
        <table class="content">
            <tr>
                <th>Assessment ID</th>
                <th>Patient ID</th>
                <th>Body Temperature (°C)</th>
                <th>BMI</th>
                <th>Sugar Level (mg/dL)</th>
                <th>Blood Pressure (mmHg)</th>
            </tr>
            @foreach ($health_assessments as $health_assessment)
            <tr>
                <td>{{$health_assessment['health_asmnid']}}</td>
                <td>{{$health_assessment['patient_id']}}</td>
                <td>{{$health_assessment['body_temp']}}</td>
                <td>{{$health_assessment['BMI']}}</td>
                <td>{{$health_assessment['sugar_lvl']}}</td>
                <td>{{$health_assessment['blood_press']}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    </body>
</html>
