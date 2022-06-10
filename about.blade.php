<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="homepage.css" rel="stylesheet">
    <title img src="img/hospital">Clinic | About</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<style>
* {
  box-sizing: border-box;
}
.column {
  float: left;
  padding: 20px;
  height: 300px;
}
.left {
  width: 50%;
  text-align: right;
}
.right {
  width: 50%;
}
.row:after {
  content: "";
  display: table;
  clear: both;
  margin: 20px;
}
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}

.team {
  background-color: white;
  width: 100%;
  padding: 20px;
  margin: 10px;
  box-shadow: 2px 2px 8px black;
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

    <section class="menu" id="menu">
      <div class="row">
        <div class="column left">
          <h1 class="titleText" style="text-align: right; text-shadow: 2px 2px 4px white";><span>KAMPUNG DESA CLINIK SYSTEM</span></h1>
          <p style="text-align: right;"><i>Welcome to the Kampung Desa Clinic System. We create a health system for remote areas.
            We provide services for customers to check their health with us through making an appointment.
            Customers may make an application via telephone calls or directly to our website.
            After a health check, they can see their health record and assessment.
            Patients can also view drug information on our medicine info page
          </i></p>
        </div>
        <div class="column right">
          <img class="mySlides" src="img/1.png" style="border-radius: 10px; box-shadow: 2px 2px 8px black; width:100%">
          <img class="mySlides" src="img/2.png" style="border-radius: 10px; box-shadow: 2px 2px 8px black; width:100%">
          <img class="mySlides" src="img/3.png" style="border-radius: 10px; box-shadow: 2px 2px 8px black; width:100%">
          <img class="mySlides" src="img/4.png" style="border-radius: 10px; box-shadow: 2px 2px 8px black; width:100%">
        </div>
      </div><br>

       <h2 class="titleText2" style="text-align: left; text-shadow: 2px 2px 4px black";><span>OUR TEAM</span></h2>
       <div class="team">
         <p>Mohd Afiq Ridhwan bin Rosli</p>
         <p>2014161</p>
       </div>
       <div class="team">
         <p>Muhammad Afiq Bin Abdul Patah</p>
         <p>1917837</p>
       </div>
       <div class="team">
         <p>Afnan Iman bin Azman</p>
         <p>1902311</p>
       </div>
       <div class="team">
         <p>Zahra Fathanah</p>
         <p>2019050</p>
       </div>
       <div class="team">
         <p>Alfikra Muhammad</p>
         <p>1836031</p>
       </div>
  </section>

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

        <!--Slide-->
        var myIndex = 0;
        carousel();
        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}
            x[myIndex-1].style.display = "block";
            setTimeout(carousel, 3000);
}
    </script>
  </body>
  </html>
