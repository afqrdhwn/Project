<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="homepage.css" rel="stylesheet">
    <title img src="img/hospital">Clinic | Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
    body {background-image: url('backgroundimg.jpg')}
    .Bubble {
    border-radius: 25px;
    background-color: white;
    padding: 20px;
    margin-top: 10px;
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
  }
  </style>

</head>

<body>

    <header>
        <a href="#" class="logo"><img src="img/hospital.png" style="width: 45px; height: 45px;"></a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navigation">
            <li><a href="http://127.0.0.1:8000/" onclick="toggleMenu();"><b>Homepage</b></a></li>
            <li><a href="#" onclick="toggleMenu();"><b>Appointment</b></a></li>
            <li><a href="#" onclick="toggleMenu();"><b>Health Assessment</b></a></li>
            <li><a href="#" onclick="toggleMenu();"><b>Health Record</b></a></li>
            <li><a href="http://127.0.0.1:8000/medicine" onclick="toggleMenu();"><b>Medicine Info</b></a></li>
            <li><a href="http://127.0.0.1:8000/about" onclick="toggleMenu();"><b>About</b></a></li>
        </ul>
    </header>
    <h1 style="text-align: left;" >Profile</h1><hr><br>
    <?php
        $qry = $conn->query("SELECT id, name, email, phoneno, gender, religion, birthdate, address);
        while($row = $qry->fetch_assoc()):
        ?>
        
    <div class="Bubble">
    <p> ID : <?php echo $row['patient_id'] ?></p>
    </div>
    <div class="Bubble">
    <p> Name : <?php echo $row['name'] ?></p>
    </div>
    <div class="Bubble">
    <p> email : <?php echo $row['email'] ?></p>
    </div>
    <div class="Bubble">
    <p> Phone no : <?php echo $row['phoneno'] ?></p>
    </div>
    <div class="Bubble">
    <p> Gender : <?php echo $row['gender'] ?></p>
    </div>
    <div class="Bubble">
    <p> Religion : <?php echo $row['religion'] ?></p>
    </div>
    <div class="Bubble">
    <p> Birthdate : <?php echo $row['birthdate'] ?></p>
    </div>
    <div class="Bubble">
    <p> Address : <?php echo $row['address'] ?></p>
    </div>
 </body>
 </html>
