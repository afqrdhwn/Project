<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/homepage.css" rel="stylesheet">
    <title img src="img/hospital">Clinic | Homepage</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    @extends('navbar')

    <section class="menu" id="menu">
            <div class="title">
                <br><br><br>
                <h2 class="titleText"><span>KAMPUNG DESA CLINIC</span></h2>
                <h2 class="titleText1"><b>ISLAMIC HEALTH CENTER</b></h2>
                <h2 class="titleText2"><span>PROTECT YOUR HEALTH AND TAKE CARE OF YOUR HEALTH</span></h2>
            </div>
            <div class="content">
                <div class="box">
                    <div class="imgBx">
                        <img src="img/appointment.jpg">
                </div>
                <div class="text">
                    <h3><b>Appointment</b></h3>
                    <p style="text-align: center;">Make an appointment for patients here.<br><br>
                        <a href="appointment"class="btn">See more  <i class="fi fi-rr-arrow-right"></i></a></p>
                </div>
            </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="img/Assesment.jpg">
                </div>
                <div class="text">
                    <h3><b>Health Assessment</b></h3>
                    <p style="text-align: center;">Review patients' health assessment here.<br><br>
                        <a href="assessment"class="btn">See more  <i class="fi fi-rr-arrow-right"></i></a></p>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="img/record.jpg">
                </div>
                <div class="text">
                    <h3><b>Health Record</b></h3>
                    <p style="text-align: center;">Review patients' health <br>record here.<br><br>
                        <a href="record"class="btn">See more  <i class="fi fi-rr-arrow-right"></i></a></p>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="img/medinfo.jpg">
                </div>
                <div class="text">
                    <h3><b>Medicine Info</b></h3>
                    <p style="text-align: center;">Review all available medicine <br>information here.<br><br>
                        <a href="medicine"class="btn">See more  <i class="fi fi-rr-arrow-right"></i></a></p>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="img/register.jpg">
                </div>
                <div class="text">
                    <h3><b>Register Patient</b></h3>
                    <p style="text-align: center;">Register new patients <br> here.<br><br>
                        <a href="patient"class="btn">See more  <i class="fi fi-rr-arrow-right"></i></a></p>
                </div>
            </div>
         </div>
            <div class="title">
        </div>
    </section>

</body>
</html>
