<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/homepage.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<header>
    <div class="dropdown">
        <img src="img/hospital.png" style="width: 45px; height: 45px;" class="logo">
        <div  class="dropdown-icon " > <i class="material-icons">arrow_drop_up</i></div>
        <div class="dropdown-content">
          <a href="profile">Profile</a>
          <a href="about">About</a>
          <a href="{{ url('/logout') }}">Logout</a>
        </div>
      </div>
    <div class="menuToggle" onclick="toggleMenu();"></div>
    <ul class="navigation">
        <li><a href="home" onclick="toggleMenu();"><b>Homepage</b></a></li>
        <li><a href="appointment" onclick="toggleMenu();"><b>Appointment</b></a></li>
        <li><a href="assessment" onclick="toggleMenu();"><b>Health Assessment</b></a></li>
        <li><a href="record" onclick="toggleMenu();"><b>Health Record</b></a></li>
        <li><a href="patient" onclick="toggleMenu();"><b>New Patient</b></a></li>
        <li><a href="medicine" onclick="toggleMenu();"><b>Medicine Info</b></a></li>
    </ul>
</header>


<script type="text/javascript">
    window.addEventListener('scroll', function(){
        const header = document.querySelector('header');
        header.classList.toggle("sticky", window.scrollY > 0);
     });
    function toggleMenu(){
        const menuToggle = document.querySelector('.menuToggle');
        const navigation = document.querySelector('.navigation');
        menuToggle.classList.toggle('active');
        navigation.classList.toggle('active');
    }
    function openForm() {
    document.getElementById("myForm").style.display = "block";
    }
    function closeForm() {
    document.getElementById("myForm").style.display = "none";
    }

</script>

</body>
</html>
